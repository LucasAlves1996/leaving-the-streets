@extends('templates.template')

@section('title')
Início
@stop

@section('content')
<div id="home">
	<div id="posts">
		<div id="post">
      <?php 
        if($session_logado == false)
        { 
      ?>
      <div style="display:grid;grid-template-columns:100%;">
        <h2 style="margin:0px auto 35px auto;">Para fazer postagens você deve estar logado.</h2><br>
        <a href="login" style="margin:0px auto 0px auto;" class="bt-login-home">Fazer login</a>
      </div>
      <?php 
        }
        else if($session_logado == true)
        {
      ?>
			<form method="POST" action="{{ url('criar-post') }}" style="width:50%;margin:0px auto 0px auto;">
        {!! csrf_field() !!}
        <input class="form-fields" style="padding:6px 0px 6px 6px;margin:0px 0px 10px 0px;width: 60%;" id="title" name="title" type="text" value="" size="30" maxlength="255" placeholder="Título" required>
				<textarea class="form-fields" style="height:80px;padding:3px 0px 3px 6px;margin:0px 0px 10px 0px;" id="comment" name="comment" cols="45" rows="5" maxlength="65525" placeholder="Escreva aqui o comentário..." required="required"></textarea><br>
				<input type="submit" class="bt-style bt-form" name="postar" id="postar" value="Postar" title="Postar">
			</form>
      <?php 
        } 
      ?>
		</div>
    @foreach($postagens as $post)
		<div class="posting">
      <div id="dadosUsuario" style="display:grid;grid-template-columns:100%;">
        <div style="width:100%;">
          <div style="margin:auto;width:70%">
            @foreach($usuarios as $user)
              @if ($user->id_usuario == $post->id_usuario)
                <img style="margin-top:40px;margin-bottom:10px;" src="{{ $user->imagem }}" width="100%" >
              @endif
            @endforeach      
          </div>
          <h5 style="text-align:center;">
            @foreach($usuarios as $user)
              @if ($user->id_usuario == $post->id_usuario)
                {{ $user->username }}
              @endif
            @endforeach
          </h5>
        </div>
      </div>

			<div id="conteudoPosting">
        <h1>{{ $post->titulo }}</h1>
        <p>{!! $post->conteudo !!}</p>
      </div>
		</div>
    @endforeach
	</div>

  <div id="menuPosts">
    <form style="width:80%;margin:20px auto 20px auto;">
      <input type="search" name="search" class="form-fields" style="padding:6px 0px 6px 5px;margin:0;" placeholder="Search">
    </form>
    <p style="margin:0px 0px 10px 25px;font-size:18px;">Principais notícias</p>
    @foreach($postagens as $post)
    <h5 style="margin-bottom:20px;"><a style="margin-left:20px;" href="">{{ $post->titulo }}</a></h5>
    @endforeach
  </div>
  <a href="#" id="voltarTopo">Voltar ao topo</a> 
</div>
@stop

@section('script')
<script>
  $(function(){
    var nav = $('#nav');
    var banner = $('#bannerImg');
    var logo = $('#logo');
    var menuPosts = $('#menuPosts');
    var voltarTopo = $('#voltarTopo');
    $(window).scroll(function () { 
      if ($(this).scrollTop() > 343) { 
        nav.addClass('fixed-top');
        banner.css({height:'60px',width:'310'});
        logo.css({margin:'5px 0px 0px 5px',width:'300px',height:'40px'});
        menuPosts.css({top:'80px',position:'fixed'});
        voltarTopo.css({display:'block'});
      } else { 
        nav.removeClass('fixed-top');
        banner.css({height:'100px',width:'400px'});
        logo.css({margin:'24px 0px 0px 19px',width:'360px',height:'50px'});
        menuPosts.css({top:'120px',position:'static'});
        voltarTopo.css({display:'none'});
      } 
    });  
  });
</script>
@stop