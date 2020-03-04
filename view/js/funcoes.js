$(document).ready(function () {
  $('a[data-confirm]').click(function (ev) {
      var href = $(this).attr('href');
      if (!$('#confirmar-del').length) {
        $('body').append('<div class="modal" tabindex="-1" id="confirmar-del"role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="text-uppercase font-weight-bold modal-title text-dark">Remover Exibição do Produto</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p class="text-dark">Deseja realmente Remover o produto de estoque de vendas?</p></div><div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button><a class="btn btn-success" id="confirmarok">Confirmar</a></div></div></div></div>');
      }
      $('#confirmarok').attr('href', href);
      $('#confirmar-del').modal({ shown: true });
      return false;
    });

    $('#add').click(function (ev) {
        var href = $(this).attr('href');
        if (!$('#confirmar-add').length) {
          $('body').append('<div class="modal" tabindex="-1" id="confirmar-add"role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="text-uppercase font-weight-bold modal-title text-dark">Ativar Exibição do Produto</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p class="text-dark">Deseja realmente Ativar a exibição do produto?</p></div><div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button><a class="btn btn-success" id="confirmarok2">Confirmar</a></div></div></div></div>');
        }
        $('#confirmarok2').attr('href', href);
        $('#confirmar-add').modal({ shown: true });
        return false;
      });

      $('#exclui').click(function (ev) {
          var href = $(this).attr('href');
          if (!$('#confirmar-exc').length) {
            $('body').append('<div class="modal" tabindex="-1" id="confirmar-exc"role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="text-uppercase font-weight-bold modal-title text-dark">Remover Produto</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p class="text-dark">Deseja realmente remover o produto do estoque e todos os dados relacionados a ele? isto inclui compras em andamento</p><p style="color: red; font-width: 900; text-transform: uppercase;">MUITO CUIDADO AO REALIZAR ESTA AÇÃO</p></div><div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button><a class="btn btn-success" id="confirmarok3">Confirmar</a></div></div></div></div>');
          }
          $('#confirmarok3').attr('href', href);
          $('#confirmar-exc').modal({ shown: true });
          return false;
        });
});
