<?php

namespace App\Controller\Api;

use App\Entity\Prerequisite;
use App\Repository\PrerequisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/api/prerequisite")
 */
class PrerequisiteController extends AbstractController
{
    /**
     * @Route("/", name="prerequisite_list", methods={"GET"})
     */
    public function getPrerequisites(PrerequisiteRepository $prerequisiteRepository): Response
    {
        $prerequisite = $prerequisiteRepository->findAll();

        return $this->json($prerequisite, Response::HTTP_OK, [], ['groups' => 'prerequisite']);
    }

    /**
     * @Route("/", name="prerequisite_new", methods={"POST"})
     */
    public function postPrerequisite(Request $request): Response
    {
        /*
            {
                "description": "prerequisite test"
            }
        */

        // start of payload validation
        $keyList = ["description"];

        $validationsErrors = [];

        $jsonContent = $request->getContent();
        if (json_decode($jsonContent) === null) {
            return $this->json([
                'error' => 'Format de données érroné.'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        // get payload content and convert it to object, so we can acess it's properties
        $contentObject = json_decode($request->getContent());
        $contentArray = get_object_vars($contentObject);

        foreach($keyList as $key){
            if(!array_key_exists($key, $contentArray)){
                $validationsErrors[] = [
                                        $key => "Requiered, but not provided"
                                        ];
            }
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        // end of payload validation

        // values validation
        $prerequisiteDescription = $contentObject->description;


        $validationsErrors = [];
        
        if($prerequisiteDescription === ""){
            $validationsErrors[] = "description, blank";
        }

        if(strlen($prerequisiteDescription) > 999){
            $validationsErrors[] = "description, length, max, 999";
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $prerequisite = new Prerequisite();
        
        $prerequisite->setDescription($prerequisiteDescription);
        $prerequisite->setCreatedAt(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($prerequisite);
        $em->flush();
        return $this->json($prerequisite, Response::HTTP_CREATED, [], ['groups' => 'prerequisite']);
    }

    /**
     * @Route("/{id<\d+>}", name="prerequisite_show", methods={"GET"})
     */
    public function getPrerequisite($id, PrerequisiteRepository $prerequisiteRepository): Response
    {
        $prerequisite = $prerequisiteRepository->find($id);
        if (!$prerequisite) {
            
            return new JsonResponse(['error' => '404 not found.'], 404);
        }
        return $this->json($prerequisite, Response::HTTP_OK, [], ['groups' => 'prerequisite']);
    }

    /**
     * @Route("/{id<\d+>}", name="prerequisite_edit", methods={"PUT"})
     */
    public function putPrerequisite(Request $request, $id, PrerequisiteRepository $prerequisiteRepository): Response
    {
        /*
            {
                "description": "prerequisite test"
            }
        */
        
        $prerequisite = $prerequisiteRepository->find($id);
        if (!$prerequisite) {
            
            return new JsonResponse(['error' => '404 not found.'], 404);
        }

        // start of payload validation
        $keyList = ["description"];

        $validationsErrors = [];

        $jsonContent = $request->getContent();
        if (json_decode($jsonContent) === null) {
            return $this->json([
                'error' => 'Format de données érroné.'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        // get payload content and convert it to object, so we can acess it's properties
        $contentObject = json_decode($request->getContent());
        $contentArray = get_object_vars($contentObject);

        foreach($keyList as $key){
            if(!array_key_exists($key, $contentArray)){
                $validationsErrors[] = [
                                        $key => "Requiered, but not provided"
                                        ];
            }
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        // end of payload validation

        // values validation
        $prerequisiteDescription = $contentObject->description;


        $validationsErrors = [];
        
        if($prerequisiteDescription === ""){
            $validationsErrors[] = "description, blank";
        }

        if(strlen($prerequisiteDescription) > 999){
            $validationsErrors[] = "description, length, max, 999";
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $prerequisite->setDescription($prerequisiteDescription);
        $prerequisite->setUpdatedAt(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->json($prerequisite, Response::HTTP_OK, [], ['groups' => 'prerequisite']);
    }

    /**
     * @Route("/{id<\d+>}", name="prerequisite_delete", methods={"DELETE"})
     */
    public function deletePrerequisite(Request $request, $id, PrerequisiteRepository $prerequisiteRepository): Response
    {
        $prerequisite = $prerequisiteRepository->find($id);
        if (!$prerequisite) {
            return new JsonResponse(['error' => '404 not found.'], 404);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($prerequisite);
        $em->flush();

        $prerequisites = $prerequisiteRepository->findAll();
        return $this->json($prerequisites, Response::HTTP_OK, [], ['groups' => 'prerequisite']);
    }
}
