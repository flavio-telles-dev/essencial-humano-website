function inicializaTela(){

	//$("#telefone").mask("(99) 9999-9999");
	//$("#telefone_recado").mask("(99)9999-9999");
	//$("#celular").mask("(99) 9999-9999");
	//$("#profissional_telefone1").mask("(99) 9999-9999");
	//$("#profissional_telefone2").mask("(99) 9999-9999");
	//$("#profissional_telefone3").mask("(99) 9999-9999");
    $("#cnpj").mask("99.999.999/9999-99");
    $("#cep").mask("99999-999");
	$("#cpf").mask("999.999.999-99",{placeholder:" "});
	$("#cpf1").mask("999.999.999-99",{placeholder:" "});
	//$("#data_nasc").mask("99/99/9999",{placeholder:" "});
	$("#agendamento").mask("99/99/9999",{placeholder:" "});
	//$("#salario").maskMoney({symbol:"",decimal:",",thousands:"."});
	//$("#profissional_ultimo_salario1").maskMoney({symbol:"",decimal:",",thousands:"."});
//	$("#profissional_ultimo_salario2").maskMoney({symbol:"",decimal:",",thousands:"."});
//	$("#profissional_ultimo_salario3").maskMoney({symbol:"",decimal:",",thousands:"."});
	
	
	
	//$("#fone").mask("(99) 9999-9999");

	
	//$("#datainicio").mask("99/99/9999",{placeholder:" "});
//	$("#datanascimento").mask("99/99/9999",{placeholder:" "});
	//$("#data").mask("99/99/9999",{placeholder:" "});
	//$("#datainicio1").mask("99/99/9999",{placeholder:" "});
	//$("#datasaida1").mask("99/99/9999",{placeholder:" "});
	//$("#datainicio2").mask("99/99/9999",{placeholder:" "});
	//$("#datasaida2").mask("99/99/9999",{placeholder:" "});
	//$("#profissional_admissao1").mask("99/9999",{placeholder:" "});
	//$("#profissional_admissao2").mask("99/9999",{placeholder:" "});
	//$("#profissional_admissao3").mask("99/9999",{placeholder:" "});
    //$("#profissional_demissao1").mask("99/9999",{placeholder:" "});
    //$("#profissional_demissao2").mask("99/9999",{placeholder:" "});
	//$("#profissional_demissao3").mask("99/9999",{placeholder:" "});

	$("#datasolicitacao").mask("99/99/9999",{placeholder:" "});
	//$("#salariofixo").maskMoney({symbol:"",decimal:",",thousands:"."});
	//$("#variavel").maskMoney({symbol:"",decimal:",",thousands:"."});
	$("#valoralimentacao").maskMoney({symbol:"",decimal:",",thousands:"."});
	$("#valortransporte").maskMoney({symbol:"",decimal:",",thousands:"."});
	$("#valorcombustivel").maskMoney({symbol:"",decimal:",",thousands:"."});

    jQuery.validator.setDefaults({ 
		 	errorClass: "errors",
			errorElement: "div",
			highlight: function(input) {
					$(input).addClass("destaque_erro");
			},
			unhighlight: function(input) {
				$(input).removeClass("destaque_erro");
			}
	});

    jQuery.validator.addMethod("telefone", function(_phone_number, element) {
		    _phone_number = _phone_number.replace(/\s+/g, ""); 
			return (this.optional(element) || _phone_number.length > 9)&&
				   (_phone_number.match(/^\(?\d{2}\)?[\s-]?\d{4}-?\d{4}$/));
		}, "Informe um n&uacute;mero de telefone v&aacute;lido");
    
    jQuery.validator.addMethod("cnpj", function(_cnpj, element) {
 	   _cnpj = _cnpj.replace(/\s+/g, ""); 
			return (this.optional(element)) ||
				   (_cnpj.length >= 14 && _cnpj.length <= 19 &&  _cnpj.match(/^\d{2}.?\d{3}.?\d{3}\/?\d{4}-?\d{2}/) && validaCNPJ(_cnpj));
		}, "Informe um CNPJ v&aacute;lido.");
		
	jQuery.validator.addMethod("cep", function(_cep, element) {
			_cep = _cep.replace(/\s+/g, ""); 
			return (this.optional(element)) ||
				   (_cep.length >= 8 && _cep.length <= 10 &&  _cep.match(/^\d{5}-\d{3}|^\d{2}.\d{3}-\d{3}|\d{8}/));
	}, "Informe um CEP v&aacute;lido.");
	
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
	
	jQuery.validator.addMethod("dateBR", function(value, element) {
   	  //contando chars
    	if(value.length!=10) return false;
   	 // verificando data
    	var data        = value;
   		 var dia         = data.substr(0,2);
   		 var barra1      = data.substr(2,1);
   		 var mes         = data.substr(3,2);
    	var barra2      = data.substr(5,1);
    	var ano         = data.substr(6,4);
    	if(data.length!=10||barra1!="/"||barra2!="/"||isNaN(dia)||isNaN(mes)||isNaN(ano)||dia>31||mes>12) return false;
    	if((mes==4||mes==6||mes==9||mes==11) && dia==31) return false;
    	if(mes==2 && (dia>29||(dia==29 && ano%4!=0))) return false;
    	if(ano < 1900) return false;
    	return true;
	}, "Informe uma data v&aacute;lida");

	$.validator.addMethod('filesizeimg', function (value, element, arg) {
		var minsize=1000; // min 1kb
        if((value>minsize)&&(value<=arg)){
			return true;
        }else{
            return false;
        }
     }, "O tamanho do arquivo deve ser inferior a 800 KB");

	 $.validator.addMethod('filesize', function (value, element, arg) {
		var minsize=1000; // min 1kb - 1000 BYTES
        if((value>minsize)&&(value<=arg)){
			return true;
        }else{
            return false;
        }
     }, "O tamanho do arquivo deve ser inferior a 2 MB");

	 $("#formulario_contato").validate({ 
	        rules: { 
				nome: { 
		          required:true,
				  minlength: 3
				},
			    email: { 
		          required:true,
				  email:true
				},		
				setor:{
				  required:true
				},
				horario: { 
		          required:true
				},
				mensagem: { 
		          required:true,
				  minlength: 3
				},
				data: { 
		          required:true,
				  dateBR:true
				},
				crmv: { 
		          required:true
				},
				cpf: { 
		          required:true,
				  cpf: true
				},
				rg: { 
		          required:true
				},
				cep: { 
		          required:true,
				  cep: true	
				},
				valida_codigox: { 
		          required:true
				},
				valida_codigo: { 
		          required:true,
				  minlength: 8,
				  equalTo:"#valida_codigox"
				}
	        }
		        
	 });
	$("#logincliente").validate({ 
	        rules: { 
		        cpf: { required:true, verificaCPF: true },
				senha: { required:true, rangelength: [8, 10] }
			}		        
	 }); 	
	$("#cadastrocliente1").validate({ 
	        rules: { 
		        usuario: { 
		          required:true,
				  minlength: 3
				},
				arquivo_foto: { 
		          accept: "jpe?g|jpg|gif|png"

				},
				cpf: { 
		          required:true,
				  verificaCPF: true
				},
				cpf1: { 
		          required:true,
				  verificaCPF: true
				},
				arquivo_anexo: {
					required:true,
					accept: "pdf|doc|docx"
				},
				cargo: { 
		          required:true				
				},
				horario: { 
		          required:true
				},
				nome: { 
		          required:true,
				  minlength: 3
				},
				datanascimento: { 
		          required:true	
				},
				estado: { 
		          required:true
				},
				sexo: { 
		         required:true
				},
				carro: { 
		         required:true
				},
				mudanca: { 
		         required:true
				},
				viagem: { 
		         required:true
				},
				tipo_residencia: { 
		          required:true	
				},
				endereco: { 
		          required:true,	
			      minlength: 10
				},
				bairro: { 				
		          required:true,	
			      minlength: 3
				},
				cidade: { 				
		          required:true,	
			      minlength: 3
				},
				uf: { 
		          required:true				  
				},
				telefone: { 
		          required:true				  
				},
				celular: { 
		          required:true				  
				},
				formacao_nivel1: { 
		          required:true				  
				},
				formacao_curso1: { 
		          required:true				  
				},	
				profissional_situacao_atual: { 
		          required:true
				},
				email: { 
		          required:true,
				  email:true
				},
				senha1: { 

		          required:true,

				  rangelength: [8, 10],

				},

				senha2: { 

		          required:true,

				  rangelength: [8, 10],

				  equalTo:"#senha1"

				}

				
	        }
		        
	 }); 
	$("#cadastrovaga").validate({ 
	        rules: { 
		        empresa: { 
		          required:true,
				  minlength: 3
				},
				contato: { 
		          required:true,
				  minlength: 3
				},
				cnpj: { 
				  cnpj: true
				},
				email: { 
		          required:true,
				  email:true
				},
				endereco: { 
		          required:true,	
			      minlength: 10
				},
				cidade: { 				
		          required:true,	
			      minlength: 3
				},
				cep: { 
		          required:true,
				  cep: true	
				},
				telefone: { 
		          required:true				  
				},
				datasolicitacao: { 
		          required:true,
		          dateBR:true			  
				},
				nomecargo: { 
		          required:true			  
				},
				numvagas: { 
		          required:true			  
				},
				horariotrabalho: {
					required:true
				},
				localtrabalho: { 
		          required:true			  
				},
				formacontratacao: { 
		          required:true			  
				},
				
				estado_civil: { 
		          required:true			  
				},
				areadeformacao: { 
		          required:true				  
				},
				conhecimentosespecificos: { 
		          required:true				
				},
				atividadedocargo: { 
		          required:true
				},
				
				nome: { 
		          required:true,
				  minlength: 3
				},
				datanascimento: { 
		          required:true	
				},
				estado: { 
		          required:true
				},
				sexo: { 
		         required:true
				},
				carro: { 
		         required:true
				},
				mudanca: { 
		         required:true
				},
				viagem: { 
		         required:true
				},
				tipo_residencia: { 
		          required:true	
				},
				
				formacao_nivel1: { 
		          required:true				  
				},
				formacao_curso1: { 
		          required:true				  
				},	
				profissional_situacao_atual: { 
		          required:true
				},
				
				senha1: { 

		          required:true,

				  rangelength: [8, 10],

				},

				senha2: { 

		          required:true,

				  rangelength: [8, 10],

				  equalTo:"#senha1"

				}

				
	        }
		        
	 }); 
}//end of inicializaTela()
