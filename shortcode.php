<?php
add_shortcode('cfcr-contato-resposta', 'cfcr_contato_resposta');

function cfcr_contato_resposta()
{
?>
    <div id="contato" class='w-100 mt-5 p-5'>
        <div class="row" data-aos="fade-up" data-aos-delay="0">
            <div class="col-sm-10 offset-sm-1">
                <div class="w-100">
                    <h1 class="float-left mr-3 text-blue" style="font-weight: 100;">
                        Mensagem enviada com <span class="font-weight-bold">Sucesso!</span>
                    </h1>
                    <hr class="hr-pers float-left" style="width:59%;margin-top: 30px;">
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-10 offset-sm-1">
                <p class='text-blue' style='font-weight: 100;'>
                    Obrigado por entrar em contato conosco. Para voltar para a página anterior, clique no botão abaixo.
                </p>
                <p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-lg px-5 rounded-none btn-success text-uppercase">
                        Voltar
                    </a>
                </p>
            </div>
            <!-- /.col-md-10 offset-md-1 -->
        </div>
        <!-- /.row -->
        <div class="row mt-5">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.1075079307425!2d-46.53364653373564!3d-23.636320617320866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42b7611da003%3A0x6e33dc39bebbcbcf!2sConverte%20F%C3%A1cil!5e0!3m2!1spt-BR!2sbr!4v1593809672509!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
                </iframe>
            </div>
            <div class="col-md-5">
                <p class='text-blue' style="font-weight: 100;">
                    Você pode nos fazer uma visita quando tudo isso<br> passar, <span class='font-weight-bold'>será um prazer te receber!</span>
                </p>
                <p class='font-md text-light-gray'>
                    <span class='font-weight-bold'>Alameda Marques Barbacena<br>
                        Nº 48 - Salas 01 e 02</span><br>
                    Santo André / SP <br>
                    09210-230
                </p>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="modal fade" id="SendEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header ">
                        <p class='text-center'>
                            <h4 class="modal-title font-weight-bold" style='color:#33dd7b'>
                                Sucesso!
                            </h4>
                        </p>
                    </div>
                    <div class="text-center modal-body font-weight-bold text-dark">
                        <p>
                            Nós recebemos seu e-mail!<br /> Obrigado por nos contactar!
                        </p>

                        <button type="button" class="px-4 btn btn-success font-weight-bold text-uppercase rounded-none" data-dismiss="modal">
                            Fechar
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
}