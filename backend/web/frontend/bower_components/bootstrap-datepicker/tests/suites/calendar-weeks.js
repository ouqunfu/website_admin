module('Calendar Weeks', {
    setup: function(){
        this.input = $('<input type="text">')
            .appendTo('#qunit-fixture')
            .val('2013-01-14')
            .datepicker({
                format: 'yyyy-mm-dd',
                calendarWeeks: true
            })
            .focus(); // Activate for visibility checks
        this.dp = this.input.data('datepicker');
        this.picker = this.dp.picker;
    },
    teardown: function(){
        this.picker.remove();
    }
});

test('adds cw header columns', function(){
    var target = this.picker.find('.datepicker-days thead tr:nth-child(3) th:first-child');
    ok(target.hasClass('cw'), 'First columns heading is from cw columns');
});

test('adds calendar week cells to each day row', function(){
    var target = this.picker.find('.datepicker-days tbody tr');

    expect(target.length);
    target.each(function(i){
        var t = $(this).children().first();
        ok(t.hasClass('cw'), "First columns is cw columns");
    });
});

test('displays correct calendar week', function(){
    var target = this.picker.find('.datepicker-days tbody tr');

    expect(target.length);
    target.each(function(i){
        var t = $(this).children().first();
        equal(t.text(), i+1, "Displays correct calendar weeks");
    });
});

test('it prepends columns to switcher thead row', function(){
    var target = this.picker.find('.datepicker-days thead tr:nth-child(2)');
    equal(target.children().length, 3, 'first row has 3 columns');
    ok(!target.children().first().hasClass('cw'), 'cw columns is not prepended');
});
