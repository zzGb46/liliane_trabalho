

<footer>

<div class="footer-container container">

    <div>
     
            <img src="assets/img/logo-nova-black.svg" alt="">
            <div>
                <ul class="ul-segunda">
                    <li><img src="assets/img/insta-svg.svg" alt=""></li>
                    <li><img src="assets/img/wpp-svg.svg" alt=""></li>
                    <li><img src="assets/img/face-svg.svg" alt=""></li>
                </ul>
            </div>

    

    </div>

    <div class="footer-links">

        <div>
            <ul>
                <li><a href="http://localhost/liliane/public/home">Home</a></li>
                <li><a href="http://localhost/liliane/public/sobre">Sobre</a></li>
                <li><a href="http://localhost/liliane/public/service">Serviço</a></li>
                

            </ul>
        </div>


        <div class="footer-location">

            <ul>
                <li><a href="#"><img src="assets/img/location-svg.svg" alt="">Av marechal.5° 00
                            SP-Penha</a>
                </li>
                <li><a href="#">
                            <img src="assets/img/tel-svg.svg" alt="">liliane.fs@live.com</a></li>
                <li><a href="#">
                            <img src="assets/img/email-svg.svg">(11 94918-7330)</a></li>
            </ul>

        </div>

    </div>



    <div class="girassol">

        
            <img src="assets/img/cliente.svg" alt="" data-aos="fade-down">
        

    </div>

</div>


</footer>




<!-- Modal -->
<div class="modal fade modalLogin" id="modalLogin" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login - liliane</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <!-- Corpo do modal com o formulário -->
                <form method="POST" action="http://localhost/liliane/public/auth/login">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control" required>
                        </div>
                        

                        <?php if (isset($_GET['login-erro'])): ?>
                            <div class="alert alert-danger">
                                <?php echo "Preencha todos os dados"; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- Rodapé do modal com os botões -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>