<?php

/**
 * @file
 * Contains \Drupal\forum\Form\ContainerForm.
 */

namespace Drupal\forum\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Base form for container term edit forms.
 */
class ContainerForm extends ForumForm {

  /**
   * Reusable url stub to use in watchdog messages.
   *
   * @var string
   */
  protected $urlStub = 'container';

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $taxonomy_term = $this->entity;
    // Build the bulk of the form from the parent forum form.
    $form = parent::form($form, $form_state, $taxonomy_term);
     $this->forumFormType = $this->t('forum container');
   // Update the description.
    $form['weight']['#description'] = $this->t('Containers are displayed in ascending order by weight.');

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function buildEntity(array $form, FormStateInterface $form_state) {
    $entity = parent::buildEntity($form, $form_state);
    $entity->forum_container = TRUE;
    return $entity;
  }
  /**
   * {@inheritdoc}
   */
  public function prepareEntity() {
    parent::prepareEntity();
    // Set the title and description of the name field.
    $this->entity->get('name')->getDataDefinition()->setLabel('Container name');
    $this->entity->get('name')->getDataDefinition()->setDescription('Short but meaningful name for this collection of related forums.');
  }
  /**
   * {@inheritdoc}
   */
  protected function forumParentSelect($tid, $title) {
    $parent_select = parent::forumParentSelect($tid, $title);
    // Change the description of the parent select.
    $parent_select['#description'] = $this->t('Containers are usually placed at the top (root) level, but may also be placed inside another container or forum.');
    return $parent_select;
  }


}
