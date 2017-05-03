    <!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation" id="nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand">
      Cinema Rocha
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search Movie : <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Titulo o Descripción</a></li>
            <li><a href="#">Lugar de Origen</a></li>
            <li><a href="#">Titulo o Descripción y Lugar de Origen</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
              <input type="text" name="Busqueda" value=""><br>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">¿Ya Tienes una Cuenta?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Iniciar Sección</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                
<!--                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>-->
            
             <!--                     <%= form_tag '/sessions' do %>
                  <%= label_tag :email, 'Email' %><br />
                  <%= email_field_tag :email, "", class: "form-control", placeholder: "Ingrese el mail", required: 'true' %><br>
                  <%= label_tag :password, 'Password' %><br />
                  <%= password_field_tag :password, "", class: "form-control", placeholder: "Ingrese el password", required: 'true' %><br>
                     <br><br>
                  <%= submit_tag "Conectarse", class: "btn btn-primary btn-block" %>
                  <% end %>
                    
<!--                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox"> keep me logged-in
                                             </label>
                                        </div>-->

                            </div>
                            <div class="bottom text-center">
                                ¿No tienes usuario ? <a href="#"><b>Unete!</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>
  <!--  <!--  <% else %>
      <%  if session[:usuario_id] != nil %>
       <% usuario = Usuario.find(session[:usuario_id]) %> 
             <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Usuario:</p></li>
        <li class="dropdown">
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <%= Usuario.find(session[:usuario_id]).nombre %> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><%= link_to "Cerrar Sesion", '/sessions/'+Usuario.find(session[:usuario_id]).id.to_s, method: :delete %></li>
          </ul>
        </li>

      <% end %>
      <% end %>
-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
