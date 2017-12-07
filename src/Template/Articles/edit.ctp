<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <legend class="deleteariticleOnedit">
      <?= __('Edit Article') ?>
      <i class="fa fa-trash-o " aria-hidden="true">
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )
        ?>
      </i>


    </legend>
    <fieldset>
        <?php
            echo $this->Form->control('title',['type'=>'text','label'=>'Title','placeholder'=>'Title','class'=>'editTitle']);
            echo $this->Ck->input('body',['label'=>'']);
            echo $this->Form->control('category_id', ['options' => $categories,'label'=>'Select Category','class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit',['class'=>'submitButtom'])) ?>
    <?= $this->Form->end() ?>
</div>
