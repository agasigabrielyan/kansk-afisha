<div class="modal_forms">
    <div class="questioning">
        <form class="form" autocomplete="off" id="form_send_question">
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" name="name" id="name"  class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="email">Ваш email</label>
                <input type="email" name="email" id="email" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="question">Ваш вопрос</label>
                <textarea name="question" id="question" class="form-control" resize="none" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" value="Отправить" id="send_question" class="form-control" />
            </div>
        </form>
    </div>
</div>
<style>
    .modal_forms{
        display:none;
        position:fixed;
        width:100%;
        height:100%;
        top:0;
        left:0;
        background-color:rgba(0,0,0,.3);
        z-index:100;
    }
    .questioning{
        width:350px;
        height:380px;
        padding:15px;
        background-color:#fff;
        border:1px solid #ccc;
        position:absolute;
        top:50%;
        left:50%;
        margin-left:-175px;
        margin-top:-190px;
    }
</style>
<script>
    $(document).on("click",".letsask",function() {
        $(".modal_forms").fadeIn(500);
    });
    $(document).on("click",".modal_forms",function(e) {
        let target = e.target.className;
        if(target=='modal_forms') {
            $(".modal_forms").fadeOut(250);
        }
    });
    $(document).on("click",".successerror",function(e) {
        $(".successerror").fadeOut(250);
    });
    $(document).on("click","input#send_question",function(e) {
        e.preventDefault();




		grecaptcha.enterprise.ready(function() {
			grecaptcha.enterprise.execute('6Lfq1AolAAAAAKh2f79gLvLkGee_x141ANSsvkw1', {action: 'login'}).then(function(token) {
					debugger;

						let data = $("form#form_send_question").serialize();
						let action = "SENDQUESTION";

						data += "&token=" + token;

debugger;

						$.ajax({
							url:"/ajax.php?action="+action,
							data:data,
							type:"POST",
							dataType:"JSON",
							beforeSend:function() {
							  $("#preloader_wrapper").fadeIn(500);
							},
							success:function(result) {
								debugger;
								if(result['SUCCESS']) {
									$("#preloader_wrapper").fadeOut(500);
									$(".modal_forms").fadeOut(500);
									$(".success_error_window").html(result['SUCCESS']);
									$("form.form_send_question input").val("");
									$(".successerror").fadeIn();
								} else if(result['ERROR']) {
									let error = "<div>";
										for(let i=0; i<result['ERROR'].length; i++) {
											error += '<div style="color:red;">' + result['ERROR'][i] + '</div>';
										}
										error += "</div>";
									$("#preloader_wrapper").fadeOut(500);
									$(".success_error_window").html(error);
									$(".successerror").fadeIn();
								}
				
				
							}
						});

			});
		});



    });
</script>