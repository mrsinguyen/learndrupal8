<?php

/**
 * @file
 * Contains course.page.inc.
 *
 * Page callback for Course entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Course templates.
 *
 * Default template: course.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_course(array &$variables) {
  // Fetch Course Entity Object.
  $course = $variables['elements']['#course'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
