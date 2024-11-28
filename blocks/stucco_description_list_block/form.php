<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<?php
$fp = FilePermissions::getGlobal();
$tp = new TaskPermission();
$DefinitionTerm = $DefinitionTerm ?? '';
$DefinitionDescription = $DefinitionDescription ?? '';
$LastBlock = $LastBlock ?? '';
$editor = app('editor');
?>

<div class="form-group">
    <?php echo $form->label("DefinitionTerm", t("Term")); ?>
    <?php echo (isset($btFieldsRequired) && in_array('DefinitionTerm', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null); ?>
    <?= $editor->outputBlockEditModeEditor('wysiwyg-ft-DefinitionTerm', $DefinitionTerm) ?>
</div>

<div class="form-group">
    <?php echo $form->label("DefinitionDescription", t("Description")); ?>
    <?php echo (isset($btFieldsRequired) && in_array('DefinitionDescription', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null); ?>
    <?= $editor->outputBlockEditModeEditor('wysiwyg-ft-DefinitionDescription', $DefinitionDescription) ?>
</div>

<div class="form-group">
    <?php echo $form->label("LastBlock", t("Is this a last item of description list group?")); ?>
    <?php echo (isset($btFieldsRequired) && in_array('LastBlock', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null); ?>
    <?php $options = array(
        '' => t('No'),
        '1' => t('Yes')
    ); ?>
    <?php echo $form->select("LastBlock", $options, $LastBlock); ?>
</div>