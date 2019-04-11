function ExportPdf(){
kendo.drawing
    .drawDOM("#barChart3",
    {
        forcePageBreak: ".page-break",
        paperSize: "A4",
        margin: { top: "1cm", bottom: "1cm" },
        scale: 0.8,
        height: 500,
        template: $("#page-template").html(),
        keepTogether: ".prevent-split"
    })
        .then(function(group){
        kendo.drawing.pdf.saveAs(group, "Exported_Itinerary.pdf")
    });
}
