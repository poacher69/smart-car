# import time
# import io
# import threading
# import picamera
import cv2
import numpy as np


class Camera(object):
    # thread = None  # background thread that reads frames from camera
    # frame = None  # current frame is stored here by background thread
    # last_access = 0  # time of last client access to the camera

    def __init__(self):
        """
        if Camera.thread is None:
            # start background frame thread
            Camera.thread = threading.Thread(target=self._thread)
            Camera.thread.start()

            # wait until frames start to be available
            while self.frame is None:
                time.sleep(0)
        """
        self.faceCascade = cv2.CascadeClassifier("haarcascade_frontalface_alt2.xml")
        self.eye_cascade = cv.CascadeClassifier('haarcascade_eye.xml')
        self.video = cv2.VideoCapture(0)

    def __del__(self):
        self.video.relese()

    def get_frame(self):
        # Camera.last_access = time.time()
        # self.__init__()

        success, image = self.video.read() #record from camera
        cv2.flip(image,180)  #camera rotate 180 degree
        gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
        faces = self.faceCascade.detectMultiScale(
                gray,
                scaleFactor=1.1,
                minNeighbors=5,
                minSize=(30, 30),
                flags=cv2.CASCADE_SCALE_IMAGE
        )
        for (x, y, w, h) in faces:
            cv2.rectangle(image, (x, y), (x+w, y+h), (0, 255, 0), 2)
            roi_gray = gray[y:y+h, x:x+w]
            roi_color = img[y:y+h, x:x+w]
            eyes = eye_cascade.detectMultiScale(roi_gray)
            for (ex,ey,ew,eh) in eyes:
                cv.rectangle(roi_color,(ex,ey),(ex+ew,ey+eh),(0,0,255),2)

        face_count = len(faces)
        inType = "Found %d faces." %face_count
        print face_count
        font = cv2.FONT_HERSHEY_SIMPLEX
        cv2.puttext(image, inType, (10,500), font, 4, (255,255,255), 2, cv2.LINE_AA)

        ret, jpeg = cv2.imencode('.jpg', image)

        return jpeg.tostring()
"""
    @classmethod
    def _thread(cls):
        with picamera.PiCamera() as camera:
            # camera setup
            camera.resolution = (320, 240)
            camera.hflip = True
            camera.vflip = True

            # let camera warm up
            camera.start_preview()
            time.sleep(2)

            stream = io.BytesIO()
            for foo in camera.capture_continuous(stream, 'jpeg',
                                                 use_video_port=True):
                # store frame
                stream.seek(0)
                cls.frame = stream.read()

                # reset stream for next frame
                stream.seek(0)
                stream.truncate()

                # if there hasn't been any clients asking for frames in
                # the last 10 seconds stop the thread
                if time.time() - cls.last_access > 10:
                    break
        cls.thread = None
"""


