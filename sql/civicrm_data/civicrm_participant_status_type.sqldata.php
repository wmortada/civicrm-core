<?php
return CRM_Core_CodeGen_SqlData::create('civicrm_participant_status_type')
  ->addDefaults([
    'is_active' => 1,
    'is_reserved' => 1,
    'visibility_id' => 2,
  ])
  ->addValues([
    [
      'name' => 'Registered',
      'label' => ts('Registered'),
      'class' => 'Positive',
      'is_counted' => 1,
      'weight' => 1,
      'visibility_id' => 1,
    ],
    [
      'name' => 'Attended',
      'label' => ts('Attended'),
      'class' => 'Positive',
      'is_reserved' => 0,
      'is_counted' => 1,
      'weight' => 2,
    ],
    [
      'name' => 'No-show',
      'label' => ts('No-show'),
      'class' => 'Negative',
      'is_reserved' => 0,
      'is_counted' => 0,
      'weight' => 3,
    ],
    [
      'name' => 'Cancelled',
      'label' => ts('Cancelled'),
      'class' => 'Negative',
      'is_counted' => 0,
      'weight' => 4,
    ],
    [
      'name' => 'Pending from pay later',
      'label' => ts('Pending (pay later)'),
      'class' => 'Pending',
      'is_counted' => 1,
      'weight' => 5,
    ],
    [
      'name' => 'Pending from incomplete transaction',
      'label' => ts('Pending (incomplete transaction)'),
      'class' => 'Pending',
      'is_counted' => 0,
      'weight' => 6,
    ],
    [
      'name' => 'On waitlist',
      'label' => ts('On waitlist'),
      'class' => 'Waiting',
      'is_active' => 0,
      'is_counted' => 0,
      'weight' => 7,
    ],
    [
      'name' => 'Awaiting approval',
      'label' => ts('Awaiting approval'),
      'class' => 'Waiting',
      'is_active' => 0,
      'is_counted' => 1,
      'weight' => 8,
    ],
    [
      'name' => 'Pending from waitlist',
      'label' => ts('Pending from waitlist'),
      'class' => 'Pending',
      'is_active' => 0,
      'is_counted' => 1,
      'weight' => 9,
    ],
    [
      'name' => 'Pending from approval',
      'label' => ts('Pending from approval'),
      'class' => 'Pending',
      'is_active' => 0,
      'is_counted' => 1,
      'weight' => 10,
    ],
    [
      'name' => 'Rejected',
      'label' => ts('Rejected'),
      'class' => 'Negative',
      'is_active' => 0,
      'is_counted' => 0,
      'weight' => 11,
    ],
    [
      'name' => 'Expired',
      'label' => ts('Expired'),
      'class' => 'Negative',
      'is_counted' => 0,
      'weight' => 12,
    ],
    [
      'name' => 'Partially paid',
      'label' => ts('Partially paid'),
      'class' => 'Positive',
      'is_counted' => 1,
      'weight' => 14,
    ],
    [
      'name' => 'Pending refund',
      'label' => ts('Pending refund'),
      'class' => 'Positive',
      'is_counted' => 1,
      'weight' => 15,
    ],
    [
      'name' => 'Transferred',
      'label' => ts('Transferred'),
      'class' => 'Negative',
      'is_counted' => 0,
      'weight' => 16,
    ],
  ]);
