<html>
	<head> </head>

	<body style="padding: 0;margin: 0;">
		<div style="width:100%;" align="center">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: sans-serif;width: 100%;max-width: 599px;margin: 0 auto;border: 2px solid #000;border-radius: 5px;font-size: 13px;line-height: 23px;color: 5f5f5f;">
				<tr>
					<td align="center">
						<a href><img src="{{ URL::asset('assets/images/AdminLTELogo.webp') }}" style="width: 48%; max-width: 100%; margin-top: 50px;" alt="image" /></a>
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin-top: 15px; margin-left: 192px;"><span style="color: #029D49;font-weight: 800;"></span></div>
					</td>
					<br />
				</tr>
				<br />
				<tr>
					<td>
						<table width="700" border="0" cellspacing="10" cellpadding="0" align="center" style="color:black; ">
							<tr style="height:30px;">
								<td width="120" style="width:60px; height:30px;  padding-left:30px; line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;font-weight: bold;">Name</td>
								<td width="20" style="width:15px;vertical-align: top;line-height: 35px;">&nbsp; :</td>
								<td style="width:auto;height:30px; background:#FFF; padding-left:10px;line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;padding-right: 30px;">{{$name}}</td>
							</tr>
							<tr style="height:30px;">
								<td width="120" style="width:60px; height:30px;  padding-left:30px; line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;font-weight: bold;">Mobile</td>
								<td width="20" style="width:15px;vertical-align: top;line-height: 35px;">&nbsp; :</td>
								<td style="width:auto;height:30px; background:#FFF; padding-left:10px;line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;padding-right: 30px;">{{ $mobile }}</td>
							</tr>
							<tr style="height:30px;">
								<td width="120" style="width:60px; height:30px;  padding-left:30px; line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;font-weight: bold;">Subject</td>
								<td width="20" style="width:15px;vertical-align: top;line-height: 35px;">&nbsp; :</td>
								<td style="width:auto;height:30px; background:#FFF; padding-left:10px;line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;padding-right: 30px;">{{ $subject }}</td>
							</tr>
							<tr style="height:30px;">
								<td width="120" style="width:60px; height:30px;  padding-left:30px; line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;font-weight: bold; vertical-align: top;">Message</td>
								<td width="20" style="width:15px;vertical-align: top;line-height: 35px;">&nbsp; :</td>
								<td style="width:auto;height:30px; background:#FFF; padding-left:10px;line-height:30px;color:#333333; font-size:14px;font-family:Tahoma;padding-right: 30px;">{{ $message }}</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
                                <td style="background-color: #000;color: #fff;padding: 10px;text-align: center;font-weight: bold;">
                                    <span style="vertical-align: super;color:white">info@bikeservice.com</span>
                                </td>
				</tr>
			</table>
		</div>
	</body>
</html>