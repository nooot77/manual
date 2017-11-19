<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;


class AppController extends Controller
{
  // public $layout = 'Bootstrap.default';
  use \Crud\Controller\ControllerTrait;

  public $helpers = [
      'Less.Less', // required for parsing less files
      'BootstrapUI.Form',
      'BootstrapUI.Html',
      'BootstrapUI.Flash',
      'BootstrapUI.Paginator'
  ];
  public $components = [
     'Acl' => [
         'className' => 'Acl.Acl'
     ]
 ];

    public function initialize()
    {
        //$this->loadComponent('Acl.Acl');

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');


                $this->loadComponent('Auth', [
                    'authenticate' => [
                        'Form' => [
                            'fields' => [
                                'username' => 'username',
                                'password' => 'password'
                            ]
                        ]
                    ],
                    'loginAction' => [
                        'controller' => 'Users',
                        'action' => 'login'
                    ],
                     // If unauthorized, return them to page they were just on
                    'unauthorizedRedirect' => $this->referer()
                ]);

                // Allow the display action so our PagesController
                // continues to work. Also enable the read only actions.
                $this->Auth->allow(['display', 'view', 'index']);

                $this->loadComponent('Crud.Crud', [
               'actions' => [
                 'Crud.Index',
               'Crud.Add',
               'Crud.Edit',
               'Crud.View',
               'Crud.Delete'
               ]
           ]);

    }
    public function isAuthorized($user = null)
       {
           // Any registered user can access public functions
           if (!$this->request->getParam('prefix')) {
               return true;
           }

           // Only admins can access admin functions
           if ($this->request->getParam('prefix') === 'admin') {
               return (bool)($user['role'] === 'admin');
           }

           // Default deny
           return false;
       }



    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */

    public function beforeRender(Event $event)
    {
          $this->loadModel('Articles');
          $this->paginate = [
              'contain' => ['Categories']
          ];
          $articles = $this->paginate($this->Articles);

          $this->set(compact('articles'));


        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
//$this->viewBuilder()->theme('AdminLTE');
//$this->set('theme', Configure::read('Theme'));
    }


}
