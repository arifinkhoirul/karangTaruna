window.openModal = function (el) {
const type = el.getAttribute("data-type");
const src = el.getAttribute("data-src");
const title = el.getAttribute("data-title");
const desc = el.getAttribute("data-desc");

const modal = document.getElementById("modal");
const modalContent = document.getElementById("modalContent");
const modalMedia = document.getElementById("modalMedia");
const modalTitle = document.getElementById("modalTitle");
const modalDesc = document.getElementById("modalDesc");

// Reset isi
modalMedia.innerHTML = "";

// Kalau foto
if (type === "foto") {
modalMedia.innerHTML = `<img src="${src}" class="w-full rounded-xl object-contain">`;
}

// Kalau video
else if (type === "video") {
    let embedSrc = src;

  // convert youtu.be → embed
    if (embedSrc.includes("youtu.be")) {
        const videoId = embedSrc.split("youtu.be/")[1];
        embedSrc = `https://www.youtube.com/embed/${videoId}`;
    }

  // convert youtube.com/watch?v= → embed
    if (embedSrc.includes("watch?v=")) {
        const videoId = embedSrc.split("watch?v=")[1].split("&")[0];
        embedSrc = `https://www.youtube.com/embed/${videoId}`;
        }

  // kasih placeholder dulu biar transisi lebih smooth
    modalMedia.innerHTML = `
        <div style="width:100%; aspect-ratio:16/9; border-radius:12px; background:#000; display:flex; align-items:center; justify-content:center;">
        <span style="color:white; font-size:14px; font-family:sans-serif;">Loading video...</span>
        </div>
    `;

  // setelah animasi modal jalan, baru inject iframe
    setTimeout(() => {
        modalMedia.innerHTML = `
        <div style="width:100%; aspect-ratio:16/9; border-radius:12px; overflow:hidden;">
            <iframe  src="${embedSrc}"
            style="width:100%; height:100%; border-radius:12px;"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
            </iframe>
        </div>`;
    }, 200);
}

modalTitle.innerText = title || "";
modalDesc.innerText = desc || "";

modal.classList.remove("hidden");
modal.classList.add("flex");

setTimeout(() => {
modalContent.classList.remove("scale-0");
modalContent.classList.add("scale-100");
}, 50);
};

window.closeModal = function () {
const modal = document.getElementById("modal");
const modalContent = document.getElementById("modalContent");
const iframe = modal.querySelector("iframe");

modalContent.classList.remove("scale-100");
modalContent.classList.add("scale-0");

setTimeout(() => {
modal.classList.add("hidden");
modal.classList.remove("flex");

// Stop video dengan reset src
if (iframe) {
const src = iframe.src;
iframe.src = "";
iframe.src = src;
}
}, 300);
};
