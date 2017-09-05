<script>
// Delete confirmation modals
$(document).ready(function(){
  $('[href=#userDelete]').click(function(){
        var del_id = null; //seta a variavel
        del_id = $(this).attr('id');//pega o id da tag <a>
        $('button#confirm').click(function(id){
            $.ajax({
                type: 'POST',//metodo pass POST or GET
                url: '<?php echo base_url('usuario/deletar/'); ?>'+del_id,// page in that go put your post
                data: 'id='+del_id,// pass the id to the page
                success:function(){
                        $("#userDelete").modal('hide');// hide the modal identifie id
                        location.reload(); //reload the page on the success
                        //$("#deletado").html(msg); //show message html of the page delete no id deletado
                }
            });
        });
    });
});
</script>