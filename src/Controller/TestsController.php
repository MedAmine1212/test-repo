<?php

namespace App\Controller;

use App\Entity\Tests;
use App\Repository\TestsRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\TestsType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class TestsController extends AbstractController
{
    #[Route('/tests', name: 'app_tests')]
    public function index(): Response
    {
        return $this->render('tests/index.html.twig', [
            'controller_name' => 'TestsController',
        ]);
    }

    #[Route('/getTests', name: 'getTests')]
    public function getAll(TestsRepository $rep): Response
    {
         return $this->render('tests/tests_list.html.twig', [
            'tests' => $rep->findAll(),
        ]);
    }

    
#[Route('/addTest', name: 'addTest')]
    public function add(TestsRepository $rep, ManagerRegistry $mr,Request $req): Response
    {
        $test = new Tests();
        $testForm = $this->createForm(TestsType::class, $test);
        $testForm->handleRequest($req);
        if($testForm->isSubmitted() && $testForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
                $em->persist($test);
                $em->flush();
                
                return $this->redirectToRoute('getTests');
        }
      
        return $this->render('tests/addTest.html.twig',[
            'form'=>$testForm->createView(),
        ]);


}

// #[Route('/addTest', name: 'addTest')]
//     public function add(TestsRepository $rep, ManagerRegistry $mr,Request $req): Response
//     {
//         $test = new Tests();
//         $testForm = $this->createForm(TestsType::class, $test);
//         $testForm->handleRequest($req);
//         if($testForm->isSubmitted() && $testForm->isValid())
//         {
//             $formData = $testForm->getData();
//             $em = $this->getDoctrine()->getManager();
               

//             $type  = $formData->getType();
//             $minPoints = $formData->getMinPoints();
//             $duration = $formData->getDuration();

//             $test.setType($type);
//             $test.setDuration($duration);
//             $test.setMinPoints($minPoints);

//             $em->persist($test);
//             $em->flush();

//                 return $this->redirectToRoute('getTests');
//         }
//         return $this->render('tests/modal_test.html.twig', [
//             'form'=>$testForm->createView(),
//         ]);
        // return $this->renderForm('tests/addTest.html.twig',
        // compact('testForm'));

// }


#[Route('/updateTest/{id}', name: 'updateTest')]
public function update(ManagerRegistry $mr, Request $req, $id): Response
{

    $rep=$mr->getRepository(Tests::class)->find($id);
    $f=$this->createForm(TestsType::class, $rep);
    $f->handleRequest($req); // analyser req http

    if($f->isSubmitted() && $f->isValid()){

    $em = $this->getDoctrine()->getManager();
    $em->flush();

    return $this->redirectToRoute('getTests');

}

    return $this->render('tests/editTest.html.twig' ,[
        'form'=>$f->createView(),

    ]);
}


    #[Route('/deleteTest/{id}', name: 'deleteTest')]
    public function delete(Tests $test): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($test);
        $em->flush();

        return $this->redirectToRoute('getTests', [
            'id'=>$test->getId(),
        ]);
    }
  
    #[Route('/testQuestions/{id}', name: 'testQuestions')]
    public function testQuestions(TestsRepository $rep,$id): array
    {
         $test = new Tests();
         $questions=$rep->getTestQuestions($id);

    foreach($questions as $question ){
        $test->addQuestion($question);
    }
        return $questions;
    }

 
    #[Route('/getTest/{id}', name: 'getTest')]
    public function getTestById(TestsRepository $rep,$id): Response
    {
        $test = new Tests();
        $testQuestions = $this->testQuestions($rep,$id);
        $nbQuestion = count($testQuestions);
        $score=0;

         return $this->render('passage_test/quiz.html.twig', [
            'test' => $test = $rep->find($id),
            'q' => $testQuestions,
            'nb_questions'=> $nbQuestion,
            'score' => $score,
        ]);
    }

    #[Route('/load', name: 'load')]
    public function home(TestsRepository $rep): Response
    {
        return $this->render('base.html.twig');
    }

    
    #[Route('/getUserTests', name: 'getUserTests')]
    public function getAllUser(TestsRepository $rep): Response
    {
         return $this->render('passage_test/tests.html.twig', [
            'user_tests' => $rep->findAll(),
        ]);
    }

    #[Route('/find', name: 'find')]
    public function searchTestByCourseName(TestsRepository $rep, Request $request): Response
    {
        $name=$request->get('name');
        $result =  $rep->findTestByCourseName($name);
        
        if($request->isMethod("post") && count($result)!=0){
            
            return $this->render('tests/tests_list.html.twig',[
                'tests'=>$result,
            ]);
        }

        return $this->render('tests/tests_list.html.twig', [
            'tests' => $rep->findAll(),
        ]);

    }


    // #[Route('/getScore', name: 'getScore')]
    // public function getScore(Request $request): Response
    // {
    //     $payload = json_decode($request->getContent(), true);
    //     $myValue = $payload['score'];

    //     return $this->render('dummy.html.twig',[
    //         'val'=>$myValue,
    //     ]);
    // }


    #[Route('/check/{id}', name: 'check')]
    public function action(Request $request,$id,TestsRepository $rep,SerializerInterface $serializer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $query = $entityManager
        ->createQuery('SELECT q FROM App\Entity\TestQs q JOIN q.test t WHERE t.id = :id ORDER BY q.questionNumber ASC')
        ->setParameter('id', $id);

        $questions = $query->getResult();

        // Serialize the questions and exclude the circular reference entity from serialization
        $data = $serializer->serialize($questions, 'json', ['groups' => ['exclude_circular_reference']]);
        
        $testQuestions = json_decode($data, true);

        // $testQuestions = $rep->findBy(["id_test" => $id]);
        // $testQuestions = $this->testQuestions($rep,$id);

        return $this->json(['nbCorrectOption'=>$testQuestions],200);
        $nbCorrectOption=count($testQuestions);
        $responses=$request->get('responses');
        foreach($testQuestions as $testQuestion){
            for($i=0 ; $i<count($responses) ;$i++){
                if(reponses[i]["id"] == $testQuestion->id){
                    if(reponses[i]["value"]!=$testQuestion->correctOption){
                        $nbCorrectOption--;
                        break;
                    }
                }
            }
        }
        
        // return $this->json(['nbCorrectOption'=>$nbCorrectOption],200);
    }


}