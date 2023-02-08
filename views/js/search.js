
    $(document).ready(function(){
        $("#search").keyup(function(){
            let searchText= $(this).val();
            if(searchText!=""){
                $.ajax({
                    url: 'controllers/search/search.controller.php',
                    method: 'post',
                    data: {query:searchText},
                    success:function(response){
                        $("#show_list").html(response);
                    }
                })
            }
            else{
                $("#show_list").html("");
            }
        })
    });