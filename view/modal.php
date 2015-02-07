<div class="modal">

	<div class="modal_bg">
		<div class="modal_window" id="mod_xxx">
			<form class="js-modal_form" method="POST" action="">
				<div class="modal__header">
					<h3 class="modal__title">Заголовок</h3>
				</div>
				<div class="modal__content">
					<p>
						<label>Заголовок</label>
						<input type="text"/>
					</p>
					<p>
						<label>Опис</label>
						<textarea name="" id="" cols="30" rows="10"></textarea>
					</p>
					<p>
						<label>Фільтри (зажміть shift для вибору декількох фільтрів)</label>
						<select multiple>
							<option>Допомога дітям</option>
						</select>
					</p>
					<p>
						<label>Дата початку</label>
						<input type="date">
					</p>
					<p>
						<label>Дата кінця</label>
						<input type="date"/>
					</p>
					<p>
						<label>Місце проведення</label>
						<input type="text"/>
					</p>
					<p>
						<label>Кількість людей</label>
						<input type="num">
					</p>
				</div>
				<div class="modal__footer">
					<input class="btn btn--full btn--green" type="submit" value="Відправити"/>
				</div>
			</form>
			<button class="icon-close js-mod_close"></button>
		</div>
	</div>

</div>

</body>
</html>