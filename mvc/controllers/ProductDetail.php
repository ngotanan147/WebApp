<?php
class ProductDetail extends Controller
{
    private $productModel;
    private $userModel;
    private $productRateModel;
    private $productCommentModel;
    private $commentLikeModel;
    function __construct()
    {
        $this->userModel = $this->getModel("UserModel");
        $this->productModel = $this->getModel("ProductModel");
        $this->productRateModel = $this->getModel("ProductRateModel");
        $this->productCommentModel = $this->getModel("ProductCommentModel");
        $this->commentLikeModel = $this->getModel("CommentLikeModel");
    }

    function test()
    {
        // $comment = $this->productCommentModel->getCommentByProductId(35);
        // print_r($comment);
        // $this->productCommentModel->updateLike(11, 0);
        // $like = $this->productCommentModel->getLikeByCommentId(11);
        // print_r($like[0]["comment_like"]);

        // $isLiked = $this->commentLikeModel->checkIfUserLiked(1, 2);
        // print_r($isLiked);

        // if (empty($isLiked)) {
        //     echo "empty";
        // } else {
        //     echo "not empty";
        // }
        $data_commmentLike = [
            "comment_id" => 10,
            "user_id" => 10,
        ];
        $this->commentLikeModel->createCommentLike($data_commmentLike);

        echo $this->commentLikeModel->getLastInsertId();
    }

    function index()
    {
        $data = $this->userModel->getUserByEmail($_SESSION['email']);
        $this->getView("ProductDetail", [
            'user' => $data,
        ]);
    }

    function detail($product_id)
    {

        $data = $this->productModel->getProductById($product_id);
        $comments = $this->productCommentModel->getCommentByProductId($product_id);
        $total_rate = $this->productRateModel->getTotalRate($product_id);
        $avg_rate = $this->productRateModel->getAVGRate($product_id);
        $same_product = $this->productModel->getProductByCategoryId($data["categories_id"]);
        $popular_product = $this->productModel->getProductByCategoryId(1);

        foreach ($same_product as $key => $value) {
            if ($value["product_id"] == $product_id) {
                unset($same_product[$key]);
            }
        }
        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $this->getView("ProductDetail", [
                'product_id' => $data["product_id"],
                'product_name' => $data["product_name"],
                'product_image' => $data["product_image"],
                'product_price' => $data["product_price"],
                'product_description' => $data["product_description"],
                'category_id' => $data["categories_id"],
                'same_product' => $same_product,
                'popular_product' => $popular_product,
                'avg_rate' => round($avg_rate[0]["AVG(rate_value)"], 1),
                'total_rate' => $total_rate[0]["count(*)"],
                'user_name' => $user["user_name"],
                'user_avatar' => $user["user_avatar"],
                'comments' => $comments
            ]);
        } else {
            $this->getView("ProductDetail", [
                'product_id' => $data["product_id"],
                'product_name' => $data["product_name"],
                'product_image' => $data["product_image"],
                'product_price' => $data["product_price"],
                'product_description' => $data["product_description"],
                'category_id' => $data["categories_id"],
                'same_product' => $same_product,
                'popular_product' => $popular_product,
                'avg_rate' => round($avg_rate[0]["AVG(rate_value)"], 1),
                'total_rate' => $total_rate[0]["count(*)"],
                'comments' => $comments
            ]);
        }
    }


    function rate($product_id, $value)
    {
        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $isExistUser = $this->productRateModel->getProductRateByUserID($user["user_id"], $product_id);
            if (empty($isExistUser)) {
                $rate_data = [
                    'rate_value' => $value,
                    'product_id' => $product_id,
                    'user_id' => $user["user_id"],
                ];

                $this->productRateModel->addProductRate($rate_data);
            } else {
                $this->productRateModel->updateProductRate($user["user_id"], $value);
            }

            $avg_rate = $this->productRateModel->getAVGRate($product_id);
            $total_rate = $this->productRateModel->getTotalRate($product_id);
            echo round($avg_rate[0]["AVG(rate_value)"], 1) . "/" . $total_rate[0]["count(*)"];
        } else {
            echo "error";
        }
    }

    function postComment($product_id, $content)
    {
        $user = $this->userModel->getUserByEmail($_SESSION['email']);

        $comment_data = [
            'user_id' => $user["user_id"],
            'user_name' => $user["user_name"],
            'user_avatar' => $user["user_avatar"],
            'product_id' => $product_id,
            'content' => $content
        ];

        $this->productCommentModel->addProductComment($comment_data);

        $last_id = $this->productCommentModel->getLastInsertId();

        echo $last_id;
    }

    function likeComment($comment_id)
    {
        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $isLiked = $this->commentLikeModel->checkIfUserLiked($comment_id, $user["user_id"]);

            if (empty($isLiked)) {

                $data_commmentLike = [
                    "comment_id" => $comment_id,
                    "user_id" => $user["user_id"],
                ];


                $this->commentLikeModel->createCommentLike($data_commmentLike);
                $totalLike = $this->commentLikeModel->getTotalLike($comment_id);

                echo $totalLike[0]["count(*)"];
                return;
            } else {
                $this->commentLikeModel->deleteByCommentIdAndUserId($comment_id, $user["user_id"]);
                $totalLike = $this->commentLikeModel->getTotalLike($comment_id);
                echo $totalLike[0]["count(*)"];
            }
        } else {
            echo "error";
        }
    }
}
