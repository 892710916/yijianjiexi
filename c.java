package api.test;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.apache.http.client.methods.HttpPost;

import com.dianxin.utils.basic.MD5;
import com.dianxin.utils.basic.StringUtil;
import com.dianxin.utils.basic.http.HttpUtil;

public class c extends Thread{
	public static void main(String[] args){
		String link = "https://www.meipai.com/media/1095878890";
		String clientId = "";
		String timestamp = System.currentTimeMillis()+"";
		String clientSecretKey = "";
		String sign = MD5.MD5Encode(link+timestamp+clientSecretKey); 
		Map map = new HashMap();
		map.put("link",link);
		map.put("timestamp",timestamp);
		map.put("link",link);
		map.put("sign",sign);
		map.put("clientId",clientId);
		String post=HttpUtil.post("https://www.meipai.com/media/1095878890",map);
		System.out.println(post);
	}

}
