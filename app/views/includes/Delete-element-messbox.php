<div id="delete-element-message-box-wrapper" class="message-box-wrapper" onclick="hideDeleteElementMessageBox()">
    <form id="delete-element-message-box" class="message-box" onclick="stopPropagate(event)" method="POST">
        <input type="number" hidden name="book_id">
        <div class="icon-container">
            <i class="fas fa-check icon-correct"></i>
            <i class="fas fa-times icon-incorrect"></i>
            <i class="fas fa-exclamation icon-warning"></i>
        </div>
        <h2>Undefined</h2>
        <p>Undefined</p>
        <button type = "submit" name="submit_delete" onclick="hideDeleteElementMessageBox()">OK</button>
        <button onclick="hideDeleteElementMessageBox(event)">Hủy</button>
    </form>
</div>