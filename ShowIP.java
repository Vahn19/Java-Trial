import java.net.InetAddress;
import java.net.UnknownHostException;
import java.util.Scanner;

public class ShowIP
{
	public static void main(String args[])
	{
		String alamat;
		alamat = args[0];
		
        try {
			InetAddress[] addr = InetAddress.getAllByName(alamat);
			for(int i=0; i< addr.length; i++)
			{
					System.out.println(addr[i]);
			}
 
        } catch (UnknownHostException e) {
 
            e.printStackTrace();
        }
	}
}