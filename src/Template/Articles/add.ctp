<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<div class="articles form large-9 medium-8 columns content">
  <div class="jumbotron" id="jumbotronArticle">
  <h1 class="addArticleheader"> <?= __('Add Article') ?> </h1>
</div>
    <?= $this->Form->create($article) ?>
    <fieldset>


        <?php

            echo $this->Form->control('title',['label'=>false,'placeholder'=>'Title','class'=>'articleTitleinput','required'=>'true','div'=>'false']);

            echo $this->Ck->input('body',['label'=>false]);
            echo $this->Form->control('category_id', ['options' => $categories,'label'=>'Select Category','id'=>'selectcategory']);



        ?>
          <?= $this->Form->button('Submit',['id'=>'submitButtom']) ?>
    </fieldset>

    <?= $this->Form->end() ?>
</div>
