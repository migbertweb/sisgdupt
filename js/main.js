    // ============================================================== 
    // Auto select left navbar
    // ============================================================== 
    $(function() {
    	$('.nav a').filter(function() {
    		return this.href == location.href
    	}).parent().addClass('active').siblings().removeClass('active')
    	$('.nav a').click(function() {
    		$(this).parent().addClass('active').siblings().removeClass('active')
    	})
    })
    /*habilitar etnias indigenas*/
    $('#one').change(function() {
    	$('#two').prop('disabled', true);
    	if ($(this).val() == 'si') {
    		$('#two').prop('disabled', false);
    	}
    });
    /*habilitar discapacidad*/
    $('#oned').change(function() {
    	$('#twod').prop('disabled', true);
    	if ($(this).val() == 'si') {
    		$('#twod').prop('disabled', false);
    	}
    });