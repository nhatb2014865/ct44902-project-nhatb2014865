<?php
class dashboard extends controller
{
    private $modelPath = 'admin/dashboardModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function category()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['user_name'];
            $this->data['sub_content']['currentPage'] = 'category';
        }
        self::render('layouts/adminLayouts/viewCategory', $this->data);
    }

    public function showCategory()
    {
        $categorys = $this->model->getCategory();
        if (!empty($categorys)) {
            echo '<table class="data-tb mt-3">';
            echo '<tr class="data-tb-row">';
            foreach ($categorys[0] as $key => $value) {
                echo '<th class="data-tb-col">' . $key . '</th>';
            }
            echo '<th class="data-tb-col" style="min-width: 102px;">Modify</th>';
            echo '</tr>';
            if (!empty($categorys)) {
                foreach ($categorys as $category) {
                    echo '<tr class="data-tb-row">';
                    foreach ($category as $key => $value) {
                        echo '<td class="data-tb-col">' . $value . '</td>';
                    }
                    echo '<td class="data-tb-col modify"><a href="#">Edit</a> <a tb-data-id="' . $category['category_id'] . '" class="delete-category-btn">Delete</a></td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
        }
    }

    public function deleteCategory()
    {
        $request = new request();
        $data = $request->getField();
        $deleteStatus = $this->model->deleteCategory($data);
        if ($deleteStatus)
            echo 'success';
    }

    public function addCategory()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['user_name'];
            $this->data['sub_content']['currentPage'] = 'category';
        }
        $this->data['success'] = session::flash('success');
        $request = new request();
        $data = $request->getField();
        $request->rules([
            'category_name' => 'required|min:5|max:50|unique:tb_category:category_name'
        ]);
        $request->message([
            'category_name.required' => 'Tên danh mục không được để trống',
            'category_name.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
            'category_name.unique' => 'Tên danh mục đã tồn tại trong hệ thống',
            'category_name.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
        ]);
        if (!empty($data)) {
            $validate = $request->validates();
            if ($validate) {
                $insertStatus = $this->model->addCategory($data);
                if ($insertStatus)
                    session::flash('success', 'Thêm danh mục thành công');
                $response = new response();
                $response->redirect('admin/addCategory');
            } else {
                $this->data['oldData'] = $request->getField();
                $this->data['errors'] = $request->errors();
            }
        }
        self::render('layouts/adminLayouts/addCategory', $this->data);
    }

    public function genre()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['user_name'];
            $this->data['sub_content']['currentPage'] = 'genre';
        }
        self::render('layouts/adminLayouts/viewGenre', $this->data);
    }

    public function getCategory()
    {
        $data = $this->model->getCategory();
        echo '<option value="">Chose category</option>';
        foreach ($data as $key => $value) {
            extract($value);
            echo '<option value="' . $category_id . '">' . $category_name . '</option>';
        }
    }

    public function showGenre()
    {
        $request = new request();
        $data = $request->getField();
        $categorys = $this->model->getGenre($data);
        if (!empty($categorys)) {
            echo '<table class="data-tb mt-3">';
            echo '<tr class="data-tb-row">';
            foreach ($categorys[0] as $key => $value) {
                echo '<th class="data-tb-col">' . $key . '</th>';
            }
            echo '<th class="data-tb-col" style="min-width: 102px;">Modify</th>';
            echo '</tr>';
            if (!empty($categorys)) {
                foreach ($categorys as $category) {
                    echo '<tr class="data-tb-row">';
                    foreach ($category as $key => $value) {
                        echo '<td class="data-tb-col">' . $value . '</td>';
                    }
                    echo '<td class="data-tb-col modify"><a href="#">Edit</a> <a tb-data-id="' . $category['genre_id'] . '" class="delete-genre-btn">Delete</a></td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
        }
    }

    public function deleteGenre()
    {
        $request = new request();
        $data = $request->getField();
        $deleteStatus = $this->model->deleteGenre($data);
        if ($deleteStatus)
            echo 'success';
    }

    public function addGenre()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['user_name'];
            $this->data['sub_content']['currentPage'] = 'genre';
        }
        $this->data['success'] = session::flash('success');
        $request = new request();
        $data = $request->getField();
        $request->rules([
            'category_id' => 'required',
            'genre_name' => 'required|min:5|max:50|unique_array:tb_genre:genre_name/category_id'
        ]);
        $request->message([
            'category_id.required' => 'Vui lòng chọn danh mục',
            'genre_name.required' => 'Tên thể loại không được để trống',
            'genre_name.min' => 'Tên thể loại phải lớn hơn 5 ký tự',
            'genre_name.unique_array' => 'Tên thể loại đã tồn tại trong hệ thống',
            'genre_name.max' => 'Tên thể loại phải nhỏ hơn 30 ký tự',
        ]);
        if (!empty($data)) {
            $validate = $request->validates();
            if ($validate) {
                $insertStatus = $this->model->addGenre($data);
                if ($insertStatus)
                    session::flash('success', 'Thêm thể loại thành công');
                $response = new response();
                $response->redirect('admin/addGenre');
            } else {
                $this->data['oldData'] = $request->getField();
                $this->data['oldData']['category_name'] = $this->model->getCategoryName($data['category_id']);
                $this->data['errors'] = $request->errors();
            }
        }
        self::render('layouts/adminLayouts/addGenre', $this->data);
    }

    public function anime()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['user_name'];
            $this->data['sub_content']['currentPage'] = 'anime';
        }
        self::render('layouts/adminLayouts/viewAnime', $this->data);
    }

    public function getGenre()
    {
        $request = new request();
        $data = $request->getField();
        $data = $this->model->getGenre($data);
        echo '<option value="">Chose genre</option>';
        foreach ($data as $key => $value) {
            extract($value);
            echo '<option value="' . $genre_id . '">' . $genre_name . '</option>';
        }
    }

    public function showAnime()
    {
        $request = new request();
        $data = $request->getField();
        $categorys = $this->model->getAnime($data);
        if (!empty($categorys)) {
            echo '<table class="data-tb mt-3">';
            echo '<tr class="data-tb-row">';
            foreach ($categorys[0] as $key => $value) {
                echo '<th class="data-tb-col">' . $key . '</th>';
            }
            echo '<th class="data-tb-col" style="min-width: 102px;">Modify</th>';
            echo '</tr>';
            if (!empty($categorys)) {
                foreach ($categorys as $category) {
                    echo '<tr class="data-tb-row">';
                    foreach ($category as $key => $value) {
                        echo '<td class="data-tb-col">' . $value . '</td>';
                    }
                    echo '<td class="data-tb-col modify"><a href="#">Edit</a> <a tb-data-id="' . $category['anime_id'] . '" class="delete-anime-btn">Delete</a></td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
        }
    }

    public function deleteAnime()
    {
        $request = new request();
        $data = $request->getField();
        $deleteStatus = $this->model->deleteAnime($data);
        if ($deleteStatus)
            echo 'success';
    }

    public function addAnime()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['user_name'];
            $this->data['sub_content']['currentPage'] = 'anime';
        }
        $request = new request();
        if ($request->isPost()) {
            $this->suportAdd();
        } else {
            $this->data['errors'] = session::flash('errors');
            $this->data['oldData'] = session::flash('oldData');
            $this->data['success'] = session::flash('success');
        }
        self::render('layouts/adminLayouts/addAnime', $this->data);
    }

    public function suportAdd()
    {
        $request = new request();
        $data = $request->getField();
        $request->rules([
            'category_id' => 'required',
            'genre_id' => 'required',
            'anime_name' => 'required|min:5|unique_array:tb_anime:anime_name/category_id/genre_id',
            'anime_link' => 'required|min:20|max:1000',
            'anime_des' => 'max:1000'
        ]);
        $request->message([
            'category_id.required' => 'Vui lòng chọn danh mục',
            'genre_id.required' => 'Vui lòng chọn thể loại',
            'anime_name.required' => 'Tên thể loại không được để trống',
            'anime_name.min' => 'Tên Anime phải lớn hơn 5 ký tự',
            'anime_name.unique_array' => 'Tên Anime đã tồn tại trong hệ thống',
            'anime_link.required' => 'Link không được bỏ trống',
            'anime_link.min' => 'Link lớn hơn 20 ký tự',
            'anime_link.max' => 'Link nhỏ hơn 1000 ký tự',
            'anime_des.max' => 'Mô tả nhỏ hơn 1000 ký tự',
        ]);
        $validate = $request->validates();
        if ($validate) {
            $insertStatus = $this->model->addAnime($data);
            if ($insertStatus) {
                session::flash('success', 'Thêm Anime thành công');
                $request->upload();
            }
            $response = new response();
            $response->redirect('admin/addAnime');
        } else {
            session::flash('errors', $request->errors());
            session::flash('oldData', $request->getField());
            $response = new response();
            $response->redirect('admin/addAnime');
        }
    }

    public function checkUnique($table, $field, $value)
    {
        return $this->model->checkUnique($table, $field, $value);
    }

    public function checkUniqueArray($table, $field, $value)
    {
        return $this->model->checkUniqueArray($table, $field, $value);
    }
}
