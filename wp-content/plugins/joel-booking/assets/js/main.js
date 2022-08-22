(function () {
  $("button.count").click(function (e) {
    var action = e.target.name.split("#");
    var field_name = "count_" + action[1];
    var current_value = $("input[name=" + field_name + "]").val();
    console.log("current_value", current_value);

    if (action[0] === "add") {
      console.log("INCREASE COUNT FOR count_" + action[1]);
      $("input[name=" + field_name + "]").val(
        parseInt(current_value) + parseInt(1)
      );
      console.log("INPUT", $("input[name=" + field_name + "]"));
    } else if (action[0] === "sub") {
      console.log("DECREASE COUNT FOR count_" + action[1]);
      $("input[name=" + field_name + "]").val(
        parseInt(current_value) - parseInt(1)
      );
      console.log("INPUT", $("input[name=" + field_name + "]"));
    }
  });

  window.localStorage.setItem("jt_form", "FORM");
})();
