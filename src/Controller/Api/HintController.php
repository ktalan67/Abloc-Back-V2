<?php

namespace App\Controller\Api;

use App\Entity\Hint;
use App\Repository\HintRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/api/hint")
 * @IsGranted("ROLE_ADMIN", statusCode=401, message="Access Denied")
 */
class HintController extends AbstractController
{
    /**
     * @Route("/", name="hint_list", methods={"GET"})
     */
    public function getHints(HintRepository $hintRepository): Response
    {
        
        $hints = $hintRepository->findAll();

        return $this->json($hints, Response::HTTP_OK, [], ['groups' => 'hint']);
    }

    /**
     * @Route("/", name="hint_new", methods={"POST"})
     */
    public function postHint(Request $request): Response
    {
        /*
            {
                "text": "hint test"
            }
        */

        // start of payload validation
        $keyList = ["text"];

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

        $hintText = $contentObject->text;

        // values validation
        
        if($hintText === ""){
            $validationsErrors[] = "text, blank";
        }

        if(strlen($hintText) > 999){
            $validationsErrors[] = "text, length, max, 999";
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $hint = new Hint();
        
        $hint->setText($hintText);
        $hint->setCreatedAt(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($hint);
        $em->flush();
        return $this->json($hint, Response::HTTP_CREATED, [], ['groups' => 'hint']);
    }

    /**
     * @Route("/{id<\d+>}", name="hint_show", methods={"GET"})
     */
    public function getHint($id, HintRepository $hintRepository): Response
    {
        $hint = $hintRepository->find($id);
        if (!$hint) {
            
            return new JsonResponse(['error' => '404 not found.'], 404);
        }
        return $this->json($hint, Response::HTTP_OK, [], ['groups' => 'hint']);
    }

    /**
     * @Route("/{id<\d+>}", name="hint_edit", methods={"PUT"})
     */
    public function putHint(Request $request, $id, HintRepository $hintRepository): Response
    {

        /*
            {
                "text": "hint test"
            }
        */

        $hint = $hintRepository->find($id);
        if (!$hint) {
            
            return new JsonResponse(['error' => '404 not found.'], 404);
        }

        // start of payload validation
        $keyList = ["text"];

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

        $hintText = $contentObject->text;

        // values validation
        
        if($hintText === ""){
            $validationsErrors[] = "text, blank";
        }

        if(strlen($hintText) > 999){
            $validationsErrors[] = "text, length, max, 999";
        }

        if (count($validationsErrors) !== 0) {
            return $this->json($validationsErrors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $hint->setText($hintText);
        $hint->setUpdatedAt(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->json($hint, Response::HTTP_OK, [], ['groups' => 'hint']);
    }

    /**
     * @Route("/{id<\d+>}", name="hint_delete", methods={"DELETE"})
     */
    public function deleteHint(Request $request, $id, HintRepository $hintRepository): Response
    {
        $hint = $hintRepository->find($id);
        if (!$hint) {
            return new JsonResponse(['error' => '404 not found.'], 404);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($hint);
        $em->flush();

        $hints = $hintRepository->findAll();
        return $this->json($hints, Response::HTTP_OK, [], ['groups' => 'hint']);
    }
}
