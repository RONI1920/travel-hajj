
function showPage(id) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.demo-tab').forEach(t => t.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    const tabs = { home: 0, login: 1, booking: 2, payment: 3, user: 4, admin: 5 };
    document.querySelectorAll('.demo-tab')[tabs[id]]?.classList.add('active');
    window.scrollTo(0, 0);
}

function selectMethod(el) {
    document.querySelectorAll('.method-option').forEach(m => m.classList.remove('selected'));
    el.classList.add('selected');
}
