<div id="<?php echo $field->form_slug ?>"></div>
<?php if ($this->uri->segment(1) !== 'admin'): ?>
    <link rel="stylesheet" href="<?= base_url('streams_core/field_asset/css/ratings/raty.css'); ?>" />
    <script type="text/javascript" src="<?= base_url('streams_core/field_asset/js/ratings/raty.js'); ?>"></script>
<?php endif; ?>
<script>
    $(function() {
        $('#<?php echo $field->form_slug ?>').raty({
            starType: 'i',
            scoreName: '<?php echo $field->form_slug ?>',
            score: '<?php echo $field->value ?>',
            readOnly: true
        });
    });
</script>