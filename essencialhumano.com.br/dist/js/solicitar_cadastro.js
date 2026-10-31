jQuery.validator.addMethod("verificacnpj", function(cnpj, element) {
   cnpj = jQuery.trim(cnpj);// retira espaços em branco
   // DEIXA APENAS OS NÚMEROS
   cnpj = cnpj.replace('/','');
   cnpj = cnpj.replace('.','');
   cnpj = cnpj.replace('.','');
   cnpj = cnpj.replace('-','');
   var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
   digitos_iguais = 1;
   if (cnpj.length < 14 && cnpj.length < 15){
      return false;
   }
   for (i = 0; i < cnpj.length - 1; i++){
      if (cnpj.charAt(i) != cnpj.charAt(i + 1)){
         digitos_iguais = 0;
         break;
      }
   }
   if (!digitos_iguais){
      tamanho = cnpj.length - 2
      numeros = cnpj.substring(0,tamanho);
      digitos = cnpj.substring(tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--){
         soma += numeros.charAt(tamanho - i) * pos--;
         if (pos < 2){
            pos = 9;
         }
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(0)){
         return false;
      }
      tamanho = tamanho + 1;
      numeros = cnpj.substring(0,tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--){
         soma += numeros.charAt(tamanho - i) * pos--;
         if (pos < 2){
            pos = 9;
         }
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(1)){
         return false;
      }
      return true;
   }else{
      return false;
   }
}, "Informe um CNPJ válido.");

jQuery.validator.addMethod("verificaCPF", function(value, element) {
	value = value.replace('.','');
	value = value.replace('.','');
	cpf = value.replace('-','');
	while(cpf.length < 11) cpf = "0"+ cpf;
	var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
	var a = [];
	var b = new Number;
	var c = 11;
	for (i=0; i<11; i++){
		a[i] = cpf.charAt(i);
		if (i < 9) b += (a[i] * --c);
	}
	if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
	b = 0;
	c = 11;
	for (y=0; y<10; y++) b += (a[y] * c--);
	if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
	if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
	return true;
}, "Informe um CPF v&aacute;lido.");

$( document ).ready( function () {
	$("#form_contato").validate({ 
		rules: { 
			nome: { 
		      required:true,
			  minlength: 3
			},
			assunto: { 
		      required:true,
			  minlength: 3
			},
			telefone: "required",
			email: { 
		     required:true,
			 email:true
			},
			arquivo_anexo: { 
		     accept: "pdf"
			},
			mensagem: { 
		      required:true,
			  minlength: 3
			}
	  	},
		messages: {
			nome: { 
		      required: "O campo NOME é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			assunto: { 
		      required: "O campo Assunto é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			telefone: "O campo TELEFONE é obrigatório.",
			email: { 
		     required: "O campo E-MAIL é obrigatório.",
			 email: "Por favor insira um endereço de e-mail válido."
			},
			arquivo_anexo: { 
			 accept: "Por favor enviar arquivos no formato PDF."
			},
			mensagem: { 
		      required: "O campo MESSAGEM é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
		}
	});
	$("#form_ebook").validate({ 
		rules: { 
			nome: { 
		      required:true,
			  minlength: 3
			},
			assunto: { 
		      required:true,
			  minlength: 3
			},
			telefone: "required",
			email: { 
		     required:true,
			 email:true
			},
			arquivo_anexo: { 
		     accept: "pdf"
			},
			mensagem: { 
		      required:true,
			  minlength: 3
			}
	  	},
		messages: {
			nome: { 
		      required: "O campo NOME é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			assunto: { 
		      required: "O campo Assunto é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			telefone: "O campo TELEFONE é obrigatório.",
			email: { 
		     required: "O campo E-MAIL é obrigatório.",
			 email: "Por favor insira um endereço de e-mail válido."
			},
			arquivo_anexo: { 
			 accept: "Por favor enviar arquivos no formato PDF."
			},
			mensagem: { 
		      required: "O campo MESSAGEM é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
		}
	});
	$("#form_cadastro").validate({ 
		rules: { 
			nome: { 
		      required:true,
			  minlength: 3
			},
			sobrenome: { 
		      required:true,
			  minlength: 3
			},
			telefone: "required",
			email: { 
		     required:true,
			 email:true
			},
			endereco: "required",
			bairro: "required",
			cidade: "required",
			cep: { 
		     required:true,
			 cep:true
			},
			cpf: { 
		     required:true,
			 verificaCPF:true
			},
			senha: { 
		     required:true,
			 rangelength: [8, 10]
			},
			mensagem: { 
		      required:true,
			  minlength: 3
			}
	  	},
		messages: {
			nome: { 
		      required: "O campo NOME é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			sobrenome: { 
		      required: "O campo SOBRENOME é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			telefone: "O campo TELEFONE é obrigatório.",
			email: { 
		     required: "O campo E-MAIL é obrigatório.",
			 email: "Por favor insira um endereço de e-mail válido."
			},
			endereco: "O campo ENDEREÇO é obrigatório.",
			bairro: "O campo BAIRRO é obrigatório.",
			cidade: "O campo CIDADE é obrigatório.",
			cep: "O campo CEP é obrigatório.",
			cpf: "O campo CPF é obrigatório.",
			senha: { 
		      required: "O campo SENHA é obrigatório.",
			  rangelength: "Digite um valor entre 8 e 10 caracteres."
			},
			mensagem: { 
		      required: "O campo MESSAGEM é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
		}
	});
	$("#portalcliente").validate({ 
		rules: {
			cpf1: { 
				required:true,	
				verificaCPF:function(element) {
					if($("#cpf1").val().length <= 14){ return true; }
				}
			}				
        },
		messages: {
   			cpf1: { required: "O campo é obrigatório.", verificaCPF:'Informe um CPF válido'}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
		}
	});
	$("#portalcliente1").validate({ 
		rules: {			
			usuario_portal: { 
				required:true,	
				verificaCPF:function(element) {
					if($("#usuario_portal").val().length <= 14){ return true; }
				},
				verificacnpj:function(element) {
					if($("#usuario_portal").val().length > 14){ return true; }
				}
			},
			senha_portal: { 
				required:true,	
				rangelength: [8, 10]
			}				
        },
		messages: {   			
			usuario_portal: { required: "O campo é obrigatório.", verificaCPF:'Informe um CPF válido', cnpj:'Informe um CNPJ válido'},			
			senha_portal: { required: "O campo SENHA é obrigatório.", rangelength: "Digite um valor entre 8 e 10 caracteres."}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
		}		        
	});

	$("#cadastrocliente").validate({ 
		rules: { 
			nome: { 
				required:true,
				  minlength: 3
			},
			telefone: {
		          required:true,
				  telefone:true
			},	
			email: { 
		          required:true,
				  email:true
			},			
			senha1: {
		          required:true,
				  rangelength: [8, 10]
			},
			senha2: { 
		          required:true,
				  rangelength: [8, 10],
				  equalTo:"#senha1"
			}
		},
		messages: {
			nome: { 
		      required: "O campo NOME é obrigatório.",
			  minlength: "Por favor, insira pelo menos 3 caracteres."
			},
			telefone: { 
		      required: "O campo TELEFONE é obrigatório.",
			  telefone: "Por favor insira um TELEFONE válido"
			},
			email: { 
		     required: "O campo E-MAIL é obrigatório.",
			 email: "Por favor insira um endereço de e-mail válido."
			},
			senha1: { 
		      required: "O campo SENHA é obrigatório.",
			  rangelength: "Digite um valor entre 8 e 10 caracteres."
			},
			senha2: { 
		      required: "O campo CONFIRMA SENHA é obrigatório.",
			  rangelength: "Digite um valor entre 8 e 10 caracteres.",
			  equalTo: "Por favor entre com o mesmo valor novamente."
			}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
		}
	});
} );