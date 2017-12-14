<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="articles form large-9 medium-8 columns content">
  <div class="jumbotron" id="jumbotronArticle">
  <h1 class="addArticleheader"> <?= __('Add Category') ?> </h1>
</div>

<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>

        <?php
            echo $this->Form->control('parent_id', ['options' => $parentCategories, 'empty' =>'No parent category or Select','label'=>false,'id'=>'selectcategory','style'=>'margin-left:300px;margin-bottom:100px;']);
            echo $this->Form->control('name',['label'=>false,'placeholder'=>'Category Name','class'=>'titleinput']);
            echo $this->Form->control('description',['label'=>false,'placeholder'=>'Description','class'=>'titleinput']);

        ?>
          <?= $this->Form->button('Submit',['id'=>'submitButtom']) ?>
    </fieldset>

    <?= $this->Form->end() ?>
</div>
