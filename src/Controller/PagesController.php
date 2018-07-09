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

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('masterpage');
}

    

    public function index($name = null){
    	//$this->viewBuilder()->Layout('masterpage3');
    	$this->loadModel("Products");
    	$this->loadModel("Tags");
    	if(isset($_GET["search"])) $name = $_GET["search"];
        if($name == null) $conditions = [];
        else $conditions = ["name LIKE" => "%".$name."%"];
        $products = $this->Products->find("all", ["conditions" => $conditions, "limit" => 50]);
        $tags = $this->Tags->find("all");
        $this->set("products", $products);
        $this->set("tags",$tags);
            
    }
    public function productsList($name = null){
    	$this->viewBuilder()->Layout('masterpage3');
    	$this->loadModel("Products");
    	$this->loadModel("Tags");
    	if(isset($_GET["search"])) $name = $_GET["search"];
        if($name == null) $conditions = [];
        else $conditions = ["name LIKE" => "%".$name."%"];
        $products = $this->Products->find("all", ["conditions" => $conditions, "limit" => 50]);
        $tags = $this->Tags->find("all");
        $this->set("products", $products);
        $this->set("tags",$tags);
        
        if($name == null) $name ="";
        $this->set("name", $name);
            
    }
	public function product(){
		$this->viewBuilder()->Layout('masterpage3');
	}

    public function cart(){
    	$this->viewBuilder()->Layout('masterpage3');
    }

    public function resume(){
    	$this->viewBuilder()->Layout('masterpage3');
    }

}//  ponte a hacer el JS, para que el buscar te traiga a este metodo
