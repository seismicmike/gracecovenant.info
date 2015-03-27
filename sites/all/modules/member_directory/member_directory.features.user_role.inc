<?php
/**
 * @file
 * member_directory.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function member_directory_user_default_roles() {
  $roles = array();

  // Exported role: Member.
  $roles['Member'] = array(
    'name' => 'Member',
    'weight' => 3,
  );

  return $roles;
}
