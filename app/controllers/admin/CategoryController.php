<?php

namespace app\controllers\admin;

class CategoryController extends AppController {

    public function indexAction () {
        $this->setMeta("Category list");
    }

    public function deleteAction () {
        $id = $this->getRequestID();

        $children = \R::count('category', 'parent_id = ?', [$id]);

        $errors = '';
        if($children) {
            $errors .= '<li>Cant be delete, category has children</li>';
        }

        $products = \R::count('product', 'category_id = ?', [$id]);
        if($products) {
            $errors .= '<li>Cant be delete, category has products</li>';
        }

        if($errors) {
            $_SESSION['error'] = "<ul>$errors</ul>";
            redirect();
        }

        $category = \R::load('category', $id);
        \R::trash($category);
        $_SESSION['success'] = 'Category was delete';
        redirect();
    }

}