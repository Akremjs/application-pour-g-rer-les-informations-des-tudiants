
$(document).ready(function(){
						   
					$("#paragraphe li").click(function(){
													   
//on va créer une variable texte qui va nous permette de récupérer la valeur au nivau de css si la paragraphe et caché ou non 
// on ulilise la valeur children car elle permet de récupérer la valeur de l'élément p = l'enfant de liste non ordonnée  
						var texte=$(this).children("p");
//si la variable texte est caché tu me effectuée plus d'animation sinon tu me effectuée une autre animation
// 1) si la variable texte est caché il faut afficher le children p avec l'animation slideDown() en 5OO milliseconde 
										if(texte.is(":hidden"))
													{
														texte.slideDown(300);
							// et pour changer le + en - on utilise cette fonction
														$(this).children("span").html("-");
														}
											else
										          {
											          texte.slideUp();
													  $(this).children("span").html("+");
										        	}
													 
													   });
						   
						  });
						