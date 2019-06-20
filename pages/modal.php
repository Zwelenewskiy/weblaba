<script src="js/jquery-3.3.1.js"></script>
<script src="js/functions.js"></script>

<div id="content">
	<div id="timer"></div>
	
	<div class="modal-overlay" id="modal-overlay"></div>

	<div class="modal" id="modal" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
	  <button class="close-button" id="close-button" title="Закрыть модальное окно">Х</button>
	  <div class="modal-guts" role="document">		
		<p>На этой странице было показано, сколько времени осталось до официального открытия нашей библиотеки по всем правилам — в здании, с десятками шкафов и тысячами книг в них... Впрочем, не стоит удивляться тому, как долго остаётся ждать этого безусловно радостного события. В конце концов, мы всего-навсего студенты технической специальности, какая нам нормальная, человеческая библиотека. "Ждать осталось недолго" (с)</p>		
	  </div>
	</div>

	<button id="open-button" class="open-button">Открыть окно</button>	
</div>

<script>	
	var modal = document.querySelector("#modal"),
		    modalOverlay = document.querySelector("#modal-overlay"),
		    closeButton = document.querySelector("#close-button"),
		    openButton = document.querySelector("#open-button");

	closeButton.addEventListener("click", function() {
	  modal.classList.toggle("closed");
	  modalOverlay.classList.toggle("closed");
	});

	openButton.addEventListener("click", function() {
	  modal.classList.toggle("closed");
	  modalOverlay.classList.toggle("closed");
	});
</script>