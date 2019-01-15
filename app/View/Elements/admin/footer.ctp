<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://classyarea.in/" target="_blank">ClassyAREA.com</a> All rights
    reserved.
</footer>

<?php
if ($_SERVER['HTTP_HOST'] == 'localhost')
{
    ?>
    <div class="clear-both">
        <?php //echo $this->element('sql_dump'); ?>
    </div>
    <?php
}
?>