<?php
 
namespace Drupal\d8form\Controller;
 
use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
 
class D8FormController implements ControllerInterface {
 
  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }
 
  /**
   * Demo for d8 form page
   */
  public function d8formPage() {
    return array(
      '#markup' => t('This is the demo d8form page.'),
    );
  }
 
}
