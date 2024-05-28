function createXMLHttpObject() {
  var xmlhttp = false;

  try {
    xmlhttp = new ActiveXObject("Mxsm12.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }

  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }
  if (!xmlhttp) {
    alert("Terjadi kesalahan pada saat pembuatan XMLHttpRequest object!");
  } else {
    alert("XMLHttpRequest berhasil dibuat.");
  }
  return xmlhttp;
}
