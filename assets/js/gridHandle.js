
    // Placeholder
    var gridster;

    $(function() {
        // Grid system - Based on http://gridster.net/ (Awesome!!)
        redSheepGridHandling = {
            // Some vars
            widgetMarginHeight: 3,
            widgetMarginWidth: 3,
            widgetHeight: 100,
            widgetWidth: 100,
            gridColMin: 4,
            gridColMax: 8,
            gridRowMin: 4,
            gridRowMax: 8,
            gridCounter: 0,
            gridLoadedID: 0,
            widgetResizeable: true,
            widgetContainer: Array(),
            widgetContainerID:Array(),
            currentWidgetType : true,
            currentWidgetID: true,
            siteMode: false,
            // Saves the grid
            save: function() {
                // Serialize the grid
                var serial = gridster.serialize();
                
                // Include grid infos
                var grid = redSheepGridHandling.widgetContainer;
                var gridID = redSheepGridHandling.widgetContainerID;
                
                // Ajax reuqest to handle
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    url: "/backend/grid/save",
                    data: {save: serial, gridContainer: grid, gridContainerID: redSheepGridHandling.widgetContainerID ,gridID: redSheepGridHandling.gridLoadedID},
                    success: function(msg) {
                        // Replace alert with a nice auto hiding message
                        alert(msg.message);
                        redSheepGridHandling.gridLoadedID = msg.returnedGridID;
                    }
                });
            },
            // Load all grid id
            load: function() {
                // Clear the options
                $('#gridID').html('');
                
                // Ajax Request to handle
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    url: "/backend/grid/load",
                    success: function(msg) {
                        // Fill selectbox
                        $.each($.parseJSON(msg.message), function(key, value) {
                            $("#gridID").append('<option value=' + value +  '>' + value + '</option>');
                        });
                        // Call picker modal
                        $('#gridSelector').modal();
                    }
                });
            },
            loadGridByIDFallBackHTML: '',
            // Load a grid by id
            loadGridByID: function(gridID) {
                var firstwidgetContentID = "0";
                var firstKey = 0;
                
                if(gridID) {
                    var loadGridByID = gridID;
                } else {
                    var loadGridByID = $("#gridID").val();
                }
                
                // Ajax Request to handle
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    data: {load: loadGridByID},
                    url: "/backend/grid/load",
                    success: function(msg) {
                        // Clear grid
                        redSheepGridHandling.killAll();
                        
                        // Set grid id
                        redSheepGridHandling.gridLoadedID = $("#gridID").val();
                        
                        // Get loaded grid
                        var loadedGrid = msg.message;

                        // Generate grid
                        $.each($.parseJSON(loadedGrid), function(key, value){                            
                            // Fill container
                            redSheepGridHandling.widgetContainer[key] = parseInt(value.widgetID);
                            
                            // Add widget by following: html, width, height, col, row
                            if(redSheepGridHandling.siteMode) {
                                gridster.add_widget('<li class="new grid-' + redSheepGridHandling.gridCounter + ' gridType' + value.widgetIDName  + ' ">' +
                                '<div class="gridPreview"></div>' +
                                '</li>', value.size_x, value.size_y, value.col, value.row);
                            } else {                            
                                gridster.add_widget('<li class="new grid-' + redSheepGridHandling.gridCounter + ' gridType' + value.widgetIDName  + ' ">' +
                                '<a class="wrenchItem" href="javascript:redSheepGridHandling.editItem(' + redSheepGridHandling.gridCounter + ');"><i class="fa fa-wrench"></i></a>' +
                                '<a class="killItem" href="javascript:redSheepGridHandling.killItem(' + redSheepGridHandling.gridCounter + ');">X</a>' +
                                value.widgetIDName +
                                '<div class="gridPreview"></div>' +
                                '</li>', value.size_x, value.size_y, value.col, value.row);
                            }
                            
                            if(value.widgetID) {
                                // Set first values
                                if(key == 0) {
                                    firstwidgetContentID = value.widgetContentID;
                                    firstKey = key;
                                }
                                // Generate content 
                                redSheepGridHandling.currentWidgetType = 'text';
                                redSheepGridHandling.loadSelectedElementInto(value.widgetContentID, key);
                            }
                            
                            // Plus one
                            redSheepGridHandling.gridCounter = parseInt(redSheepGridHandling.gridCounter) + 1;
                        });
                    }
                });
                
                // Reload 0 because "prevent default" - must be loaded to fill
                setTimeout(function(){ 
                    $('.grid-0 .gridPreview').html(redSheepGridHandling.loadGridByIDFallBackHTML);
                }, 500);
            },
            // Spawn new item
            spawnItem: function(elementType) {
                // Set widget container
                redSheepGridHandling.widgetContainer[redSheepGridHandling.gridCounter] = elementType;
                // Pattern for adding new widget
                gridster.add_widget('<li class="new grid-' + redSheepGridHandling.gridCounter + ' gridType' + elementType  + '">' +
                        '<a class="wrenchItem" href="javascript:redSheepGridHandling.editItem(' + redSheepGridHandling.gridCounter + ');"><i class="fa fa-wrench"></i></a>' +
                        '<a class="killItem" href="javascript:redSheepGridHandling.killItem(' + redSheepGridHandling.gridCounter + ');">X</a>' +
                        elementType +
                        '<div class="gridPreview"></div>' +
                        '</li>', 1, 1);

                // Plus one
                redSheepGridHandling.gridCounter = parseInt(redSheepGridHandling.gridCounter) + 1;
            },
            // Edit item by number
            editItem:function(number) {
                // Get edit Type
                var editType = $.trim($('.grid-' + number).attr('class').replace('new', '').replace('grid-' + number, '').replace('gs-w', '').replace('gridType', ''));

                // Set current number
                redSheepGridHandling.currentWidgetID = number;
                
                // Safe this into object
                redSheepGridHandling.currentWidgetType = editType;

                // Edit request
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    data: {edit: {
                            type: editType,                            
                        }},
                    url: "/backend/grid/edit",
                    success: function(editResponses) {
                        // TEXT: Generate html body
                        if(editType == 'text') {
                            $('.modalBodyEdit').html('<select id="editSelector" name="editSelector" class="form-control"></select>');   
                            // Generate possibilities
                            $.each($.parseJSON(editResponses.message), function(key, value){   
                                // Fill select
                                $("#editSelector").append('<option value=' + value.id +  '>' + value.name + '</option>');
                            });
                            
                            // Call edit modal
                            $('#gridEdit').modal();
                        }
                    }
                });
            },
            // Loads the element into the widget
            loadSelectedElementInto: function(id, widgetID) {
                if(id) {
                    var loadBy = id;
                } else {
                    var loadBy = $("#editSelector").val();
                }
                
                // Save element
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    data: {edit: {
                            type: redSheepGridHandling.currentWidgetType,  
                            id: loadBy
                        }},
                    url: "/backend/grid/edit",
                    success: function(saveResponse) {
                        // parse to json
                        saveResponse.message = $.parseJSON(saveResponse.message);
                        
                        // Set grid id
                        if(widgetID) {
                            var gridID = widgetID;
                        } else {
                            var gridID = redSheepGridHandling.currentWidgetID;
                        }
     
                        // Set id
                        redSheepGridHandling.widgetContainerID[gridID] = saveResponse.message.id; 

                        // Add response text into grid element
                        $('.grid-' + gridID + ' .gridPreview').html(saveResponse.message.text);
                        
                        // Fallback - first element
                        if(redSheepGridHandling.loadGridByIDFallBackHTML < 1) {
                            redSheepGridHandling.loadGridByIDFallBackHTML = saveResponse.message.text;
                        }
                    }
                });
            },
            // Kill item by number
            killItem: function(number) {
                // Unset in widget container
                redSheepGridHandling.widgetContainer[number] = 'none';
                redSheepGridHandling.widgetContainerID[number] = 'none';
                // Unset in grid
                gridster.remove_widget(document.getElementsByClassName('grid-' + number));
            },
            // "Clear" grid
            killAll: function() {
                // Container
                redSheepGridHandling.widgetContainer = Array();
                
                // Clear
                gridster.remove_all_widgets();

                // Reset counter
                redSheepGridHandling.gridCounter = 0;
            },
            // Reload the grid
            reload: function() {
                redSheepGridHandling.killAll();
                redSheepGridHandling.init();
            },
            // Init whole grid
            init: function() {
                // Create gridster var
                gridster = $(".gridster ul").gridster({
                    widget_margins: [redSheepGridHandling.widgetMarginWidth, redSheepGridHandling.widgetMarginHeight],
                    widget_base_dimensions: [redSheepGridHandling.widgetHeight, redSheepGridHandling.widgetWidth],
                    min_cols: redSheepGridHandling.gridColMin,
                    min_rows: redSheepGridHandling.gridRowMin,
                    max_cols: redSheepGridHandling.gridColMax,
                    max_rows: redSheepGridHandling.gridRowMax,
                    resize: {
                        enabled: redSheepGridHandling.widgetResizeable
                    },
                    autogenerate_stylesheet: true,
                }).data('gridster');
            }

        };

        // Register Event on "loadSelectedGrid"
        $('.loadSelectedGrid').click(function() {
            redSheepGridHandling.loadGridByID();
            $('.hideModal').click();
        });
        
        // Register Event on "loadSelectedGrid"
        $('.loadSelectedElementInto').click(function() {
            redSheepGridHandling.loadSelectedElementInto();
            $('.hideModal').click();
        });

        // Reload Grid
        redSheepGridHandling.init();
    });
