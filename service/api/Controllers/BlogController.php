<?php
use App\Database\DB;
use App\Http\Response;

class BlogController {

    public function index() {
        // echo "BLog Controller Index";
        $blog = DB::query("SELECT b.*, c.cat_name, c.cat_url
                         FROM blogs AS b
                         LEFT JOIN categories AS c
                         ON b.cat_id = c.cat_id");
        if(count($blog)){
            return Response::success($blog, "Get Blogs Success!!!") ;
        } else {
            return Response::error("Blogs not found!!!");
        }
    }

    public function show() {
        $id = $_GET['id'] ?? null ;
        $url = $_GET['url'] ?? null ;
        if($id && $url){
            $params = array(
                'blog_id' => (int)$id,
                'blog_url' => (string)$url,
            );
            $blog = DB::query('SELECT * FROM blogs 
                               WHERE blog_id = :blog_id 
                               AND blog_url = :blog_url', $params);
            if(count($blog)){
                return Response::success($blog[0], 'Get Blogs Success!!!');
            } else {
                return Response::error('Blog Not Found!!!', 404);
            }
        } else {
            return Response::error('Bad Request!!!', 400);
        }
    }

}