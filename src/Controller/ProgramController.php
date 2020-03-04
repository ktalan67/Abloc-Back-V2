<?php

namespace App\Controller;

use App\Entity\Program;
use App\Form\ProgramType;
use App\Repository\ExerciseRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/api/program")
 */
class ProgramController extends AbstractController
{
    /**
     * @Route("/", name="program_list", methods={"GET"})
     */
    public function getPrograms(ProgramRepository $programRepository): Response
    {
        $programs = $programRepository->findAll();

        return $this->json($programs, Response::HTTP_OK, [], ['groups' => 'program']);
    }

    /**
     * @Route("/", name="program_new", methods={"POST"})
     */
    public function postProgram(Request $request, ExerciseRepository $exerciseRepository): Response
    {
        /*
            {
                "title": "program test",
                "time": 10,
                "imgPath": "image_program_1.png",
                "description": "description program 1",
                "exercises":[1, 20]
            }
        */

        // get payload content and convert it to object, so we can acess it's properties
        $contentObject = json_decode($request->getContent());
        $programTitle = $contentObject->title;
        $programTime = $contentObject->time; // type integer
        $programImgPath = $contentObject->imgPath;
        $programDescription = $contentObject->description;
        $programExercises = $contentObject->exercises; // array of ids of exercises


        if($programTime === ""){
            $programTime = 0;
        }

        if(gettype($programExercises) !== "array"){
            $programExercises = [];
        }

        foreach($programExercises as $key => $id){
            if(gettype($id) !== "integer"){
                $programExercises[$key] = "";
            }
        }
        
        // payload validation
        $validationsErrors = [];
        
        if($programTitle === ""){
            $validationsErrors[] = "title, blank";
        }

        if(strlen($programTitle) > 64){
            $validationsErrors[] = "title, length, max, 64";
        }

        if(gettype($programTime) !== "integer"){
            $validationsErrors[] = "time, not integer";
        }

        if($programTime < 0){
            $validationsErrors[] = "time, value, min, 0";
        }

        if($programTime > 999){
            $validationsErrors[] = "time, value, max, 999";
        }

        if(strlen($programImgPath) > 64){
            $validationsErrors[] = "imgPath, length, max, 64";
        }

        if($programDescription === ""){
            $validationsErrors[] = "description, blank";
        }

        if(strlen($programDescription) > 999){
            $validationsErrors[] = "description, length, max, 999";
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }


        $program = new Program();
        $program->setTitle($programTitle);
        $program->setCreatedAt(new \DateTime());
        $program->setTime($programTime);

        if($programImgPath === ""){
            $programImgPath = "default_program.png";
        }

        $program->setImgPath($programImgPath);
        $program->setDescription($programDescription);

        foreach($programExercises as $id){
            $exercise = $exerciseRepository->find($id);
            if($exercise){
                $program->addExercise($exercise);
            }
        }
        

        $em = $this->getDoctrine()->getManager();
        $em->persist($program);
        $em->flush();
        return $this->redirectToRoute('program_show', ['id' => $program->getId()], Response::HTTP_CREATED);
    }

    /**
     * @Route("/{id}", name="program_show", methods={"GET"})
     */
    public function getProgram($id, ProgramRepository $programRepository): Response
    {
        $program = $programRepository->find($id);
        if (!$program) {
            
            return new JsonResponse(['error' => '404 not found.'], 404);
        }
        return $this->json($program, Response::HTTP_OK, [], ['groups' => 'program']);
    }

    /**
     * @Route("/{id}/edit", name="program_edit", methods={"PUT"})
     */
    public function putProgram(Request $request, Program $program): Response
    {
        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('program_index');
        }

        return $this->render('program/edit.html.twig', [
            'program' => $program,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="program_delete", methods={"DELETE"})
     */
    public function deleteProgram(Request $request, Program $program): Response
    {
        if ($this->isCsrfTokenValid('delete'.$program->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($program);
            $entityManager->flush();
        }

        return $this->redirectToRoute('program_index');
    }
}
