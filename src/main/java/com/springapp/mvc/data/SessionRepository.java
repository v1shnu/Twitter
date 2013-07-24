package com.springapp.mvc.data;

import com.springapp.mvc.model.Session;
import com.springapp.mvc.model.User;
import org.springframework.stereotype.Repository;

import java.util.ArrayList;
import java.util.List;

/**
 * Created with IntelliJ IDEA.
 * User: vishnu
 * Date: 22/7/13
 * Time: 6:25 PM
 */
@Repository
public class SessionRepository {
    private static ArrayList<Session> sessions = new ArrayList<> ();

    public static void addSession(Session session) {
        sessions.add(session);
    }

    public static void endSession(Session session) {
        sessions.remove(session);
    }

    public static void printSessionIds() {
        for(int i=0; i<sessions.size(); i++)
            System.out.println(sessions.get(i).getSessionid());
    }

    public static boolean isValidSession(Session session) {
        for(Session s : sessions) {
            if(s.getUserid()==session.getUserid() && s.getSessionid().equals(session.getSessionid()))
                return true;
        }
        return false;
    }
}
