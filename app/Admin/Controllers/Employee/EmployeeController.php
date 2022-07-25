<?php

namespace App\Admin\Controllers\Employee;

use App\Models\Employee\Employee;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EmployeeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Employee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Employee());

        $grid->column('id', 'ID');
        $grid->column('family_name', '名前(姓)');
        $grid->column('given_name', '名前(名)');
        $grid->column('family_name_kana', '名前(セイ)');
        $grid->column('given_name_kana', '名前(メイ)');
        $grid->column('age', '年齢');
        $grid->column('gender_id', '性別');
        $grid->column('move_start', '出勤開始日');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Employee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('family_name', __('Family name'));
        $show->field('given_name', __('Given name'));
        $show->field('family_name_kana', __('Family name kana'));
        $show->field('given_name_kana', __('Given name kana'));
        $show->field('age', __('Age'));
        $show->field('gender_id', __('Gender id'));
        $show->field('move_start', __('Move start'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Employee());

        $form->text('family_name', __('Family name'));
        $form->text('given_name', __('Given name'));
        $form->text('family_name_kana', __('Family name kana'));
        $form->text('given_name_kana', __('Given name kana'));
        $form->text('age', __('Age'));
        $form->number('gender_id', __('Gender id'));
        $form->date('move_start', __('Move start'))->default(date('Y-m-d'));

        return $form;
    }
}
