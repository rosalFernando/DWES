<?php
namespace App\Controllers;
use App\Models\Blog;
use Respect\Validation\Validator as v;
use Laminas\Diactoros\ServerRequest;
class BlogsController extends BaseController{
    
    public function getAddBlogAction($request){
        $responseMessage = null;
        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $blogValidator = v::key('title',v::stringType()->notEmpty())
                            ->key('description',v::stringType()->notEmpty());
            try{
                $blogValidator->assert($postData);
                $blog= new Blog();
                $blog->title = $postData['title'];
                $blog->blog = $postData['description'];
                $blog->tags = $postData['tag'];
                $blog->author = $postData['author'];
    
                $files = $request->getUploadedFiles();
                $image=$files['image'];
                if($image->getError()==UPLOAD_ERR_OK){
                    $fileName = $image->getClientFilename();
                    $fileName = uniqid().$fileName;
                    $image->moveTo("img/$fileName");
                    $blog->image = $fileName;
                }
                $blog->save();
                $responseMessage = 'saved';
            }catch(\Exception $e){
                $responseMessage = $e -> getMessage();
            }
            
        }
        return $this->renderHTML('addBlog.twig',[
            'responseMessage' => $responseMessage
        ]);
        
    }
   
}
?>