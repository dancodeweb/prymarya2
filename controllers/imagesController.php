<?php
# This file is part of Prymarya 2.

# Prymarya 2 is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

# Prymarya 2 is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.

# You should have received a copy of the GNU General Public License along with Prymarya 2.  If not, see <https://www.gnu.org/licenses/>.

# ---------------------------------------------

# Este arquivo é parte do programa Prymarya 2

# Prymarya 2 é um software livre; você pode redistribuí-lo e/ou
# modificá-lo dentro dos termos da Licença Pública Geral GNU como
# publicada pela Fundação do Software Livre (FSF); na versão 3 da
# Licença, ou (a seu critério) qualquer versão posterior.

# Este programa é distribuído na esperança de que possa ser útil,
# mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO
# a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
# Licença Pública Geral GNU para maiores detalhes.

# Você deve ter recebido uma cópia da Licença Pública Geral GNU junto
# com este programa, Se não, veja <http://www.gnu.org/licenses/>.
?>
<?php
  /**
   * CONTROLADOR DA TELA DE IMAGENS DO SISTEMA.
   */
  class imagesController extends controller
  {

    public function __construct(){
        parent::__construct();
        $users = new usersDB();
        $users->users_check_session();
        global $user_in;
        $user_in = intval($_SESSION['crud_session_log']);
    }

    public function index(){
      global $user_in;
      $data_set = array('erro' => '');
      $img = new imagesDB();
      $data_set['my_images'] = $img->getImages($user_in);

      if(isset($_POST['img_new'])){
        $id = $user_in;
        $images = $_FILES['images'];

        $img = new imagesDB();
        $data_set['return'] = $img->addImage($images, $id);
      }

      if (isset($_POST['img_edit'])) {
        $pic_id = $_POST['id_img'];
        $name = addslashes(htmlspecialchars($_POST['name']));
        $description = addslashes(htmlspecialchars($_POST['description']));
        $img = new imagesDB();
        $data_set['return'] = $img->editImage($pic_id, $name, $description);
      }

      if (isset($_POST['deleteImageDone'])) {
        $pic_id = $_POST['id_img'];
        $img = new imagesDB();
        $data_set['return'] = $img->deleteImage($pic_id);
   }

      $this->loadTemplate('images', $data_set);
    }

  }

?>
