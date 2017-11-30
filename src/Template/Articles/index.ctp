<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<!-- Navigation -->

<div class="articlesnav">


   <ul class="navbar-nav ">
     <li class="nav-item ">

     </li>
     <li class="nav-item">

     </li>
     <li class="nav-item">

     </li>
     <li class="nav-item">

     </li>
   </ul>

</div>

      <div class="row">


        <?php foreach ($articles as $article): ?>
        <!-- Post Content Column -->
        <div class="col-lg-14">
         <!-- Category name -->
            <h2 class="fa fa-caret-down fa-lg" aria-hidden="true">
                 <?= $article->has('category') ? $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?>
             </h2>

            <br>
          <!-- Title -->
          <h2 class="fa fa-link fa-lg" aria-hidden="true">
          <?= h($article->title) ?>
          </h2>
        <div class="articlesAction">
          <ul>
            <li>
              <a href="<?=$this->Url->build(["action" => "View", $article->id]);?>"><i class="fa fa-eye " aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="<?=$this->Url->build(["action" => "edit", $article->id]);?>"><i class='fa fa-pencil'></i></a>
            </li>
            <li>
              <a href="<?=$this->Url->build(["action" => "delete", $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]);?>"><i class="fa fa-trash-o " aria-hidden="true"></i></a>
            </li>
            <li class="articleDate">
                Created:<?= h($article->created) ?>
            </li>
          <li class="articleDate">
              Modified:<?= h($article->modified) ?>
          </li>

          </ul>
        </div>


          <br>

          <!-- Post Content -->
          <p class="lead">
                        <?= $this->Text->autoParagraph(($article->body)); ?>
          </p>
<hr>
          <?php endforeach; ?>

        </div>

        <!-- Sidebar Widgets Column -->
          <!-- Search Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div> -->


      </div>
        </div>
          </div>
            </div>

      <!-- /.row -->


    <!-- /.container -->

<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="Search">

</div>
<div class="articles index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id) ?></td>
                <td><?= h($article->title) ?></td>
                <td><?= $article->has('category') ? $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></td>
                <td><?= h($article->created) ?></td>
                <td><?= h($article->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div> -->
