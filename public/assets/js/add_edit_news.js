 // chọn file drop drap
 document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
    const dropZoneElement = inputElement.closest(".drop-zone");
  
    dropZoneElement.addEventListener("click", (e) => {
        inputElement.click();
    });
  
    inputElement.addEventListener("change", (e) => {
        if (inputElement.files.length) {
        updateThumbnail(dropZoneElement, inputElement.files[0]);
        }
    });
  
    dropZoneElement.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZoneElement.classList.add("drop-zone--over");
    });
  
    ["dragleave", "dragend"].forEach((type) => {
        dropZoneElement.addEventListener(type, (e) => {
        dropZoneElement.classList.remove("drop-zone--over");
        });
    });
  
    dropZoneElement.addEventListener("drop", (e) => {
        e.preventDefault();
  
        if (e.dataTransfer.files.length) {
        inputElement.files = e.dataTransfer.files;
        updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
        }
  
        dropZoneElement.classList.remove("drop-zone--over");
    });
    });
  
    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
    let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
  
    // First time - remove the prompt
    if (dropZoneElement.querySelector(".drop-zone__prompt")) {
        dropZoneElement.querySelector(".drop-zone__prompt").remove();
    }
  
    // First time - there is no thumbnail element, so lets create it
    if (!thumbnailElement) {
        thumbnailElement = document.createElement("div");
        thumbnailElement.classList.add("drop-zone__thumb");
        dropZoneElement.appendChild(thumbnailElement);
    }
  
    thumbnailElement.dataset.label = file.name;
  
    // Show thumbnail for image files
    if (file.type.startsWith("image/")) {
        const reader = new FileReader();
  
        reader.readAsDataURL(file);
        reader.onload = () => {
        thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
        };
    } else {
        thumbnailElement.style.backgroundImage = null;
    }
    }







    // rich text editor
    let inputuploadvideo = document.getElementById("videoInput");
        let optionsButtons = document.querySelectorAll(".option-button");
        let advancedOptionButton = document.querySelectorAll(".adv-option-button");
        let fontName = document.getElementById("fontName");
        let fontSizeRef = document.getElementById("fontSize");
        let writingArea = document.getElementById("text-input");
        let imageadd = document.getElementById("imageadd");
        let videoadd = document.getElementById("videoadd");
        let outdiv = document.getElementById("outdiv");
        let getall = document.getElementById("getall");
        let input_out = document.getElementById("input_out");
        let linkButton = document.getElementById("createLink");
        let alignButtons = document.querySelectorAll(".align");
        let spacingButtons = document.querySelectorAll(".spacing");
        let formatButtons = document.querySelectorAll(".format");
        let scriptButtons = document.querySelectorAll(".script");

        // button get all
        getall.addEventListener("click", () => {
          outdiv.innerText = writingArea.innerHTML;
        });
        getall.addEventListener("click", () => {
          input_out.value = writingArea.innerHTML;
        });

        //List of fontlist
        let fontList = [
          "Arial",
          "Verdana",
          "Times New Roman",
          "Garamond",
          "Georgia",
          "Courier New",
          "cursive",
        ];

        //Initial Settings
        const initializer = () => {
          //function calls for highlighting buttons
          //No highlights for link, unlink,lists, undo,redo since they are one time operations
          highlighter(alignButtons, true);
          highlighter(spacingButtons, true);
          highlighter(formatButtons, false);
          highlighter(scriptButtons, true);

          //create options for font names
          fontList.map((value) => {
              let option = document.createElement("option");
              option.value = value;
              option.innerHTML = value;
              fontName.appendChild(option);
          });

          //fontSize allows only till 7
          for (let i = 1; i <= 7; i++) {
              let option = document.createElement("option");
              option.value = i;
              option.innerHTML = i;
              fontSizeRef.appendChild(option);
          }

          //default size
          fontSizeRef.value = 3;
        };

        //main logic
        const modifyText = (command, defaultUi, value) => {
          //execCommand executes command on selected text
          document.execCommand(command, defaultUi, value);
        };

        //For basic operations which don't need value parameter
        optionsButtons.forEach((button) => {
          button.addEventListener("click", () => {
              modifyText(button.id, false, null);
          });
        });

        //options that require value parameter (e.g colors, fonts)
        advancedOptionButton.forEach((button) => {
          button.addEventListener("change", () => {
              modifyText(button.id, false, button.value);
          });
        });

        // image
        imageadd.addEventListener("click", () => {
          var urlimage = prompt('Nhập URL hình ảnh ( jpg, jpeg, png, gif, webp ) :');
            if (urlimage) {
                var img = new Image();
                img.src = urlimage;
                img.onload = function() {
                    img.style.width = '100%';
                    modifyText('insertHTML', false, img.outerHTML);
                };
            }
        });

        // video
        videoadd.addEventListener("click", () => {
          var urlvideo = prompt('Nhập URL video ( mp4, webm ) :');
            if (urlvideo) {
                var videoHtml = '<video controls style="max-width: 100%; height: auto;" source src="' + urlvideo + '"></video><div><br></div>';
                modifyText('insertHTML', false, videoHtml);
            }
        });

        //link
        linkButton.addEventListener("click", () => {
          let userLink = prompt("Enter a URL");
          //if link has http then pass directly else add https
          if (/http/i.test(userLink)) {
              modifyText(linkButton.id, false, userLink);
          } else {
              userLink = "http://" + userLink;
              modifyText(linkButton.id, false, userLink);
          }
        });

        //Highlight clicked button
        const highlighter = (className, needsRemoval) => {
          className.forEach((button) => {
              button.addEventListener("click", () => {
              //needsRemoval = true means only one button should be highlight and other would be normal
              if (needsRemoval) {
                  let alreadyActive = false;

                  //If currently clicked button is already active
                  if (button.classList.contains("active")) {
                  alreadyActive = true;
                  }

                  //Remove highlight from other buttons
                  highlighterRemover(className);
                  if (!alreadyActive) {
                  //highlight clicked button
                  button.classList.add("active");
                  }
              } else {
                  //if other buttons can be highlighted
                  button.classList.toggle("active");
              }
              });
          });
        };

        const highlighterRemover = (className) => {
          className.forEach((button) => {
              button.classList.remove("active");
          });
        };

        window.onload = initializer();