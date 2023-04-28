<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		var num=[1,4,6,4,3];
		for(i=0;i<5;i++) {
			for(j=0;j<5-i-1;j++) {
				if (num[j]>num[j+1]) {
					temp=num[j];
					num[j]=num[j+1];
					num[j+1]=temp;

				}
			}
		}
			foreach (num as key => value) {
			document.write
		}
	</script>

</body>
</html>